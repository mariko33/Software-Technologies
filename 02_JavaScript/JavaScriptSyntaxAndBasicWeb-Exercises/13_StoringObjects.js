function solve(arr) {

    let result=[];
    for(let i=0; i<arr.length; i++){
        let currArr=arr[i].split(" -> ");
        let name=currArr[0];
        let age=currArr[1];
        let grade=currArr[2];

        let obj={
            Name:name,
            Age:age,
            Grade:grade
        };
        result.push(obj);

    }

    for (let i=0; i<result.length;i++){

        console.log('Name: '+result[i].Name);
        console.log('Age: ' +result[i].Age);
        console.log('Grade: '+ result[i].Grade);
    }


}

solve(['Pesho -> 13 -> 6.00','Ivan -> 12 -> 5.57','Toni -> 13 -> 4.90']);