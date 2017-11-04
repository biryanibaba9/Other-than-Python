/*
 Assignment-1 Due:08/29/2016
 Z-ID: Z1809837
 Name: Shreyas Javvadhi
*/
/*This is a program to find the sum of first n odd numbers*/
#include "prog1.h"

int main()
{
int n,sum=0;
cout<<"Enter the value of n:";
cin>>n;	/*Value entered by the user is stored in  n*/
if(n>=1)
{
sum=n*n; /*Calculates the sum and stores the value in the variable 'sum'*/
}
else
{
cout<<"Enter a value greater than or equal to 1";
}
cout<<"The sum of first n odd numbers is:"<<sum<<"\n"; /*Displays the value stored in the variable 'sum'*/
return 0;
}
