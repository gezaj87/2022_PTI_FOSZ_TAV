let table= [];
let chartName=[];
let chartData =[];
const colors = ["#b91d47","#00aba9","#2b5797","#e8c3b9","#1e7145","#DAF7A6","#FFC300","#FF5733","#C70039","#900C3F","#581845","#5c1dbc","#7daafb"];
let chartText ="Költségek kategóriánként";
const err = "Nincs megjeleníthető adat"

function drawChartTable(newTable, newChart){     
    makeNewTable(newTable);
    makeNewChart(newChart);
    drawChart();    
}

let tbodyId = document.getElementById("tetelTablaBody");
let canvas = document.getElementById("myChart");

let myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});

function makeNewTable(newTable){    
    try{
        let tr = "";

    for (let i = 0; i< newTable.length; i++){
            tr += `<tr onclick="ModalExpense(${newTable[i].id})"><td class="hatter"> ${newTable[i].kategorianev}</td><td>${newTable[i].megnevezes}</td><td class="hatter"> ${newTable[i].osszeg.toLocaleString('hu-HU')}</td><td>${newTable[i].datum}</td></tr>`;
        }        
        tbodyId.innerHTML = (tr);
    }
    catch{
        tbodyId.innerHTML = err;
    }    
}

function ModalExpense(id)
{
    myModal.show();
    let data = expenses.filter((e) => {
        if (e.id === id)
        {
            return e;
        }
    })
    console.log(data);
}

function makeNewChart(newChart){
    
    for (let i = 0; i < newChart.length;i++){
        chartName.push(newChart[i].kategorianev);
        chartData.push(newChart[i].osszesen);
    }    
}

function drawChart(){
        
    var xValues = chartName;
    var yValues = chartData;
    var barColors =colors                           
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
                                    text: chartText
                                }
                            }
                        });
}
