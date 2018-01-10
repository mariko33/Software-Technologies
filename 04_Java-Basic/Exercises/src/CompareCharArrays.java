import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args){
        Scanner scanner=new Scanner(System.in);
        String first=scanner.nextLine().replaceAll("\\W","");
        String second=scanner.nextLine().replaceAll("\\W","");
       int compare=first.compareTo(second);
       if (compare<0){
           System.out.println(first);
           System.out.println(second);
       }
       else {
           System.out.println(second);
           System.out.println(first);
       }
    }
}
