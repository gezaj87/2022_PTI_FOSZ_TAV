class DeleteExpense
{
    constructor(token)
    {
        this.token = token;
        this.id = null;
    }

    async Request(id)
    {
        this.id = id;

        const requestOptions = {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({token: this.token, id: this.id})
        }
        
        const response = await fetch("deleteexpense", requestOptions);
        const json = await response.json();
        return json;
    }

    async Response(id)
    {
        const response = await this.Request(id);
        return response;
    }
}