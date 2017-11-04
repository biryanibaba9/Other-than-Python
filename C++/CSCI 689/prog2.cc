/*
 Assignment-2  Due: 09/06/2016
 Z-ID: Z1809837
 Namne: Shreyas Javvadhi
*/
/*This program checks for a perfect number and displays the perfect number as a sum of its divisors*/

#include "prog2.h"
bool isPerfect(unsigned int number)	/*This function checks if the number is perfect or not*/
{
unsigned int sum=0;
for(unsigned int i=1;i<=number/2;i++)
{
if(number%i==0)
sum+=i;
}
if(sum==number)
return true;
else
return false;				/*It stores a boolean value as return value of the function*/
}


string divisor(unsigned int number)	/*This function prints the perfect number as a sum of its divisors*/
{
string A;
A.append(to_string(number));
A.append("=");
for(unsigned int i=1;i<=number/2;i++)
{
if(number%i==0)
{
if(i==1)
A.append(to_string(i));
else
{
A.append("+");
A.append(to_string(i));
}
}
}
return A;
}

int main()
{
for(unsigned int i=1;i<=9999;i++)
{
if(isPerfect(i))			/*Function call of the function isPerfect()*/
{
cout<<i<<endl;
cout<<divisor(i)<<endl;			/*Function call of the function divisor()*/
}
}
return 0;
}
