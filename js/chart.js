const chart =
document.getElementById("dashboardChart");

if(chart){

new Chart(chart,{

type:"pie",

data:{

labels:[
"Applied",
"Interview",
"Accepted",
"Rejected"
],

datasets:[{

data:[5,2,1,1],

backgroundColor:[
"#3b82f6",
"#facc15",
"#22c55e",
"#ef4444"
]

}]

},

options:{

plugins:{

legend:{

labels:{
color:"#ffffff"
}

}

}

}

});

}