function showDelegues(){
    if (document.getElementById("DeleguesOui").checked)
    {
        document.getElementById('deleg').className = ""; 
    }
    else
    {
        document.getElementById('deleg').className = "d-none";
    } 
}

function showArbitres(){
    if (document.getElementById("ArbitresOui").checked)
    {
        document.getElementById('arb').className = ""; 
    }
    else
    {
        document.getElementById('arb').className = "d-none";
    } 
}

function showTerrains(){
    if (document.getElementById("TerrainsOui").checked)
    {
        document.getElementById('terr').className = ""; 
    }
    else
    {
        document.getElementById('terr').className = "d-none";
    } 
}

function showReport(){
    if (document.getElementById("ReportOui").checked)
    {
        document.getElementById('rep').className = ""; 
    }
    else
    {
        document.getElementById('rep').className = "d-none";
    } 
}

function showIncident1(){
    if (document.getElementById("IncidentOui1").checked)
    {
        document.getElementById('incident1').className = ""; 
    }
    else
    {
        document.getElementById('incident1').className = "d-none";
    } 
}

function showIncident2(){
    if (document.getElementById("IncidentOui2").checked)
    {
        document.getElementById('incident2').className = ""; 
    }
    else
    {
        document.getElementById('incident2').className = "d-none";
    } 
}

function showContact1(){
    if (document.getElementById("ContactOui1").checked)
    {
        document.getElementById('contact1').className = ""; 
    }
    else
    {
        document.getElementById('contact1').className = "d-none";
    } 
}

function showContact2(){
    if (document.getElementById("ContactOui2").checked)
    {
        document.getElementById('contact2').className = ""; 
    }
    else
    {
        document.getElementById('contact2').className = "d-none";
    } 
}

function Future(date1){
    const jour = new Date();
    if (date1 > jour)
    {

        document.getElementById('incidentrecev').className = "d-none";
        document.getElementById('incidentvisit').className = "d-none";
        document.getElementById('incidentddcs').className = "d-none";
        document.getElementById('incidentpolice').className = "d-none";
    }
    else{
        document.getElementById('incidentrecev').className = "";
        document.getElementById('incidentvisit').className = "";
        document.getElementById('incidentddcs').className = "";
        document.getElementById('incidentpolice').className = "";
    }
}

