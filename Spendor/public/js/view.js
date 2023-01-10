let table= [];
let chartName=[];
let chartData =[];
const colors = ["#b91d47","#00aba9","#2b5797","#e8c3b9","#1e7145","#DAF7A6","#FFC300","#FF5733","#C70039","#900C3F","#581845","#5c1dbc","#7daafb"];
let chartText ="Költségek kategóriánként";
const err = "Nincs megjeleníthető adat"
let expenseDeleteButton = document.getElementById("Delete_expense_modal");
let expenseModifyButton = document.getElementById("Modify_expense_modal");

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

let idModal = 0;

function ModalExpense(id)
{
    myModal.show();
    let data = expenses.filter((e) => {
        if (e.id === id)
        {
            idModal = e.id;            
            return e;
        }
    })   
    
    ModalDatas(data);
    
}

function ModalDatas(data){   
    document.getElementById("modal_megnevezes_id").value = data[0].megnevezes;
    document.getElementById("modal_kategoria_id").value = data[0].kategorianev;
    document.getElementById("modal_osszeg_id").value = data[0].osszeg;
    document.getElementById("modal_datum_id").value = data[0].datum;
}

expenseDeleteButton.addEventListener('click',function()
{
    deleteResponse(idModal);
    alert("Sikeres Törlés");
    location.reload();
});

expenseModifyButton.addEventListener('click',function(){

    let name = document.getElementById("modal_megnevezes_id").value;
    let category_id = document.getElementById("modal_kategoria_id").value;
    let amount = document.getElementById("modal_osszeg_id").value;
    let date = document.getElementById("modal_datum_id").value;    
    if(name.length === 0 || category_id.length === 0 || amount.length === 0 || date.length === 0)
    {
        alert("Nincs minden mező kitöltve");
    }
    else{
        modifyResponse(idModal,name,category_id,amount,date);
        alert("Sikeres módosítás");
        location.reload();
    }
})


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
