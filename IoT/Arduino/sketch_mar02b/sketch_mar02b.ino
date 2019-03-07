#include <ESP8266WiFi.h>
#include <DHT.h>
#include <AmazonIOTClient.h>
#include <ESP8266AWSImplementations.h>

Esp8266HttpClient httpClient;
Esp8266DateTimeProvider dateTimeProvider;

AmazonIOTClient iotClient;
ActionError actionError;

const char* ssid = "";
const char* password = "";

// Pin 2 will be used to read sensor data
int pin = 2;

// Initializing the sensor
DHT11 dht11(pin);

//Function to convert Celsius to Fahrenheit
double Fahrenheit(double celsius) {
  return ((celsius * 9 / 5) + 32);
}

void setup() {
  Serial.begin(115200);
  delay(10);
  Serial.println();

  // Connecting to Wi-Fi
  WiFi.mode(WIFI_STA);
  Serial.println();
  Serial.println();
  Serial.println("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.println("WiFi connected");

  iotClient.setAWSRegion("us-west-2");
  iotClient.setAWSEndpoint("amazonaws.com");
  iotClient.setAWSDomain("al1x5kb4rzh0x.iot.us-west-2.amazonaws.com");
  iotClient.setAWSPath("$aws/things/esp8266/shadow/update/accepted");
  iotClient.setAWSKeyID("AKIAJJQ6ASLIDIPBE4PQ");
  iotClient.setAWSSecretKey("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");
  iotClient.setHttpClient(&httpClient);
  iotClient.setDateTimeProvider(&dateTimeProvider);
}

void loop() {
  int err;
  float temp, humi;

//Reading the sensor data
  if ((err = dht11.read(humi, temp)) == 0) {
    Serial.print(" temperature:");
    Serial.print(temp);
    Serial.print(" humidity:");
    Serial.print(humi);
    Serial.println();
  } else {
    Serial.println();
    Serial.print(" Error No :");
    Serial.print(err);
    Serial.println();

  }
// Converting the float data to char arrays
  char sTemp[10], sHumi[10];
  dtostrf(humi, 6, 2, sHumi);
  dtostrf(temp, 6, 2, sTemp);

// Creating the thing shadow to be sent to aws iot
  char shadow[100];
  strcpy(shadow, "{\"state\":{\"reported\": {\"Humidity\":");
  strcat(shadow, sHumi);
  strcat(shadow, ", \"Temperature\":");
  strcat(shadow, sTemp);
  strcat(shadow, "}}}");
  Serial.print(shadow);

  char* result = iotClient.update_shadow(shadow, actionError);
  Serial.print(result);

  delay(60000);
}
