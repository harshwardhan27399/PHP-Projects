import java.util.*;
class a
{
	public static void main(String args[]){
		Scanner sc=new Scanner(System.in);
		double x1=sc.nextDouble();
		double y1=sc.nextDouble();
		double x2=sc.nextDouble();
		double y2=sc.nextDouble();
		double x=x2-x1;
		double y=y2-y1;
		double dist=x/y;
		System.out.println(dist);
	}
	
}