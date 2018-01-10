import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args){
        Scanner scanner=new Scanner(System.in);
        char[] alphabet=scanner.nextLine().toCharArray();

        for (int i = 0; i <alphabet.length ; i++) {
            System.out.println(alphabet[i]+" -> "+((int)alphabet[i]-97));
        }
    }
}
