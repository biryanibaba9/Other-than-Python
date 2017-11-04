/*************************************************************
Class:     CSCI 470-1
Program:   Assignment 1
Author:    Shreyas Javvadhi
Z-number:  z1809837
Date Due:  02/13/17

Purpose:   To calculate the annuity at different time periods. 

Execution: java hw1 1000.00 0.05 5

**************************************************************/

import java.lang.Math;
import java.text.DecimalFormat;

/****************************************************************
Class:     hw1
Author:    Shreyas Javvadhi
Z-number:  z1809837
Description: Contains all the functions needed to calculate the
             annuity at different time periods.
****************************************************************/

class hw1
{

public static void main(String args[])   //Main function
{
double valueByFormulaAnnuity = valueOfFutureAnnuity(Double.parseDouble(args[0]),Double.parseDouble(args[1]),Integer.parseInt(args[2]),true);  //Function call for future annuity by formula.
double valueByLoopAnnuity = valueOfFutureAnnuity(Double.parseDouble(args[0]),Double.parseDouble(args[1]),Integer.parseInt(args[2]),false); //Function call for future annuity by loop.
System.out.println("");
System.out.println("      Base \t Rate \t # \t Formula\t   Loop");
System.out.println("   "+args[0]+" \t "+args[1]+" \t "+args[2]+" \t "+valueByFormulaAnnuity+" \t"+valueByLoopAnnuity+" \n ");
System.out.println("");
System.out.println("");
double presentCalOfAnnuity = valueOfPresentAnnuity(Double.parseDouble(args[0]),Double.parseDouble(args[1]),Integer.parseInt(args[2]));  //Function call for Present annuity.
System.out.println("");
double futureDueByLoop = valueOfFutureAnnuityDue(Double.parseDouble(args[0]),Double.parseDouble(args[1]),Integer.parseInt(args[2]),false); //Funcation call for Future annuity due by loop.
double futureDueByFormula = valueOfFutureAnnuityDue(Double.parseDouble(args[0]),Double.parseDouble(args[1]),Integer.parseInt(args[2]),true); //Function call for Future annuity due by formula. 
System.out.println("");
System.out.println("      Base \t Rate \t # \t Formula\t   Loop");
System.out.println("   "+args[0]+" \t "+args[1]+" \t "+args[2]+" \t "+futureDueByFormula+" \t"+futureDueByLoop+" \n ");
System.out.println(""); 
double calOfPresentAnnuityDue = valueOfPresentAnnuityDue(Double.parseDouble(args[0]),Double.parseDouble(args[1]),Integer.parseInt(args[2])); //Function call for present annuity due.
}
 
public static double valueOfFutureAnnuity (double amount, double interest, int years, boolean decision)  //Function definition for future annuity.
{
double futureAnnuity = 0.00;
double loopAnnuity = 0.00;
if (decision)
  {
     futureAnnuity = amount*((Math.pow((1+interest),years)-1)/interest);
     return formatting(futureAnnuity);
  }
else
  {
     for (int i = 0; i < years; i++)
      {
       loopAnnuity = amount*(Math.pow((1+interest),i));
       futureAnnuity = loopAnnuity + futureAnnuity;
       System.out.println("At end of year "+ (i+1) + ", value is " + formatting(futureAnnuity));
      }
    return formatting(futureAnnuity);
  }
}

public static double formatting (double value)  //Function definition for decimal formatting.
{
DecimalFormat f = new DecimalFormat("##.00");
     return Double.parseDouble((f.format(value)));
}

public static double format1 (double value)   //Function definition for decimal formatting.
{
DecimalFormat f1 = new DecimalFormat("##.000000");
     return Double.parseDouble((f1.format(value)));
}

public static double valueOfPresentAnnuity (double amount, double interest, int years)  //Function definition for present annuity.
{
double presentAnnuity = 0.00;
    presentAnnuity = amount*((1-(Math.pow((1+interest),-years)))/interest);
    System.out.println("The present value of an ordinary annuity is "+ format1(presentAnnuity));
    System.out.println("");
    System.out.println("That is the amount you have to start with \nto give out " + amount +" at the end of every year for "+years+" years \nassuming the remaining money earns "+interest+"\n");
    System.out.println("");
    System.out.println("starting with "+ format1(presentAnnuity));
    for (int i=0; i < years; i++)
    {
     presentAnnuity = (presentAnnuity*(interest+1))-amount;
     System.out.println("at the end of year "+ (i+1)+ ", give out \t"+amount+", leaving \t"+formatting(presentAnnuity));
    }
System.out.println("\n--------------------------------------------\n");
return 0;
}


public static double valueOfFutureAnnuityDue (double amount, double interest, int years, boolean decision)  //Function definition for future annuity due.
{
double futureAnnuityDue = 0.00;
double totalDueAnnuity = 0.00;
if (decision)
  {
   futureAnnuityDue = amount*(((Math.pow((interest+1),years)-1)/interest))*(1+interest);
   return formatting(futureAnnuityDue);
  }
else
  {
   System.out.println("Future value of an annuity due:");
   for (int i=1; i <= years+1; i++)
    {
     futureAnnuityDue = (amount)*(Math.pow((interest+1),i-1));
     totalDueAnnuity += futureAnnuityDue;
      if (i <= years)
       System.out.println("At beginning of year "+i+", value is "+ formatting(totalDueAnnuity));
      else
       {
        totalDueAnnuity -= amount;
        System.out.println("At beginning of year "+i+", value is "+ formatting(totalDueAnnuity));
       }
    }
  }
return formatting(totalDueAnnuity);
}


public static double valueOfPresentAnnuityDue (double amount, double interest, int years)  //Function definition for present annuity due.
{
double presentAnnuityDue = 0.00;
presentAnnuityDue = (amount)*((1-(Math.pow((interest+1),-years)))/interest)*(1+interest);
System.out.println("The present value of an annuity due is "+ format1(presentAnnuityDue));
System.out.println("");
System.out.println("That is the amount you have to start with \nto give out "+amount+" at the beginning of  every year for "+years+" years \nassuming the remaining money earns "+interest);
System.out.println("");
System.out.println("starting with "+format1(presentAnnuityDue));
presentAnnuityDue -= amount;
System.out.println("at the beginning of year 1, give out \t"+amount+", leaving \t"+ formatting(presentAnnuityDue));
  for( int i=1; i < years; i++)
   {
    presentAnnuityDue = presentAnnuityDue*(interest+1)-amount;
    System.out.println("at the beginning of year "+(i+1)+", give out \t"+amount+", leaving \t"+formatting(presentAnnuityDue));
   }
return 0;
}

}
