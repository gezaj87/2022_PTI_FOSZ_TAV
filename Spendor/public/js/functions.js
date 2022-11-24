let table= []
let chartName=[]
let chartData =[]
const colors = ["#b91d47","#00aba9","#2b5797","#e8c3b9","#1e7145","#DAF7A6","#FFC300","#FF5733","#C70039","#900C3F","#581845","#5c1dbc","#7daafb"]
const chartText ="Költségek kategóriánként"

function datas(newTable, newChart){
    makeNewTable(newTable)
    makeNewChart(newChart)
    drawChart()
}




let tbodyId = document.getElementById("tesztTabla")


function makeNewTable(newTable){

    for (let i = 0; i< newTable.length; i++){
        console.log("1")
        let tr = document.createElement('tr');        
        for (let j = 0; j < 4;j++){
            console.log("2")
            let td = document.createElement('td')            
            for (k = 0; k< 2;k++){
                console.log("3")
                td.innerHTML = newTable[i].megnevezes
                tr.appendChild(td)
            }            
            tr.appendChild(td)            
        }
        tbodyId.appendChild(tr)

    }

}


function makeNewChart(newChart){
    for (let i = 0; i < newChart.length;i++){
        chartName.push(newChart[i].kategorianev);
        chartData.push(newChart[i].osszesen)
    }
}

function drawChart(){
var xValues = chartName
var yValues = chartData
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
    
