function solve(arr) {

    let resultArr=[];

    for(let i=0; i<arr.length;i++){
        let currArr=arr[i].split(" ");
        if(currArr[0]=="add")resultArr.push(currArr[1])
        else resultArr.splice(Number(currArr[1]),1);
    }

    resultArr.forEach(e=>console.log(e));
}

solve([ 'add 3', 'add 5', 'add 7' ]);