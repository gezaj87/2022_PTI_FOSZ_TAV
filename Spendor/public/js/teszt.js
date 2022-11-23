var xValues = ["Szorakozás", "Utazás"];
var yValues = [4500, 12500];
var barColors = [   "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145"
                    ];                            
                    new Chart("myChart", {
                        type: "doughnut",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Költségek kategóriánként"
                            }
                        }
                    });

function teszt(adat){
    console.log(adat)
}

let id = document.getElementById("tesztTabla")
console.log(id)
    
