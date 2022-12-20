class ModifyExpense
{
    constructor(token)
    {
        this.token = token;
        this.id = null;
        this.name = null;
        this.category_id = null;
        this.amount = null;
        this.date = null;
    }

    async Request(id, name, category_id, amount, date)
    {
        //'name', 'category_id', 'amount', 'date'
        this.id = id;
        this.name = name;
        this.category_id = category_id;
        this.amount = amount;
        this.date = date;

        const requestOptions = {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                token: this.token,
                id: this.id,
                name: this.name,
                category_id: this.category_id,
                amount: this.amount,
                date: this.date
            })
        }
        
        const response = await fetch("modifyexpense", requestOptions);
        const json = await response.json();
        return json;
    }

    async Response(id, name, category_id, amount, date)
    {
        const response = await this.Request(id, name, category_id, amount, date);
        return response;
    }
}