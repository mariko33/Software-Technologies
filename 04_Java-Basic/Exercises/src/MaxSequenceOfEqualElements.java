import java.util.Scanner;

public class MaxSequenceOfEqualElements {
    public static void main(String[] args){
        Scanner scanner=new Scanner(System.in);
        String[] inputStr=scanner.nextLine().split(" ");
        int[] arr=new int[inputStr.length];
        for (int i = 0; i <inputStr.length ; i++) {
            arr[i]=Integer.parseInt(inputStr[i]);

        }

        int start=0;
        int len=1;
        int bestStart=start;
        int bestLen=len;
        for (int i = 1; i <arr.length ; i++) {
            if(arr[i]==arr[i-1]){
                len++;
            }
            else {
                start=i;
                len=1;
            }
            if (bestLen<len){
                bestLen=len;
                bestStart=start;

            }
        }

        for (int i=0;i<bestLen;i++){
            System.out.printf(arr[bestStart]+" ");

        }



    }
}
