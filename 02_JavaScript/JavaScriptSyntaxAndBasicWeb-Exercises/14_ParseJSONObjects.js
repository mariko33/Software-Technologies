function solve(arr) {

    let result=[];
    for(let i=0; i<arr.length; i++){
        result.push(JSON.parse(arr[i]));
    }

    for (let i=0;i<result.length;i++){
        console.log(`Name: ${result[i].name}`);
        console.log(`Age: ${result[i].age}`);
        console.log(`Date: ${result[i].date}`);
    }
}

solve([ '{"name":"Gosho","age":10,"date":"19/06/2005"}',
    '{"name":"Tosho","age":11,"date":"04/04/2005"}',
    '{"name":"Maria","age":24,"date":"31/12/1996"}' ]);