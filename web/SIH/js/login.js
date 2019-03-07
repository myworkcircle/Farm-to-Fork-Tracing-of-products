function validate(){
    var x = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(x == "farmer"&&password=="farmer")
    window.location.href="../forms/farmerprofile.html";
    if(x=="processor" && password=="processor")
    window.location.href="../processor/processorprofile.html";
    if(x=="elevator" && password=="elevator")
    window.location.href="../elevator/elevatorprofile.html";
    if(x=="distributor" && password=="distributor")
    window.location.href="../distributer/Distributor%20Info%20page.html";
}