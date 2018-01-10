function solve(arr) {
    let count=Number(arr[0]);
    let objArr={};

    for(let i=0; i<count;i++){
        objArr[i]=0;
    }


    for(let i=1; i<arr.length;i++){
        let currArr=arr[i].split(' - ');
        let index=Number(currArr[0]);
        objArr[index]=Number(currArr[1]);
    }

    for(let key in objArr){
        console.log(objArr[key]);
    }
}

solve([ '3', '0 - 5', '1 - 6', '2 - 7' ]);