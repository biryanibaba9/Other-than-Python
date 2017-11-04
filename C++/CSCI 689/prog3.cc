/*
 Assignment-3 Due:09/14/2016
 Name:Shreyas Javvadhi
 Z-ID:Z1809837
*/
/*This program implements the Caesar Cipher to encode text*/
#include "prog3.h"
int main()
{
ifstream test;
int s;
test.open(file1.c_str());		/*Opens the first data file prog3.d1*/
	if(test.is_open())
	{
	test>>s;
		while(!test.eof())
		{
		process_infile(s);	/*Calls the function process_infile()*/
		test>>s;
		}
	}
	else
	{
	cout<<"File doest not exist";	/*If no data file has been opened then it notifies the user and exits the program.*/
	exit(EXIT_FAILURE);
	}
}

void process_infile(int shift)
{
ifstream in1;
string str,t;
in1.open(file2.c_str());		/*Opens the second data file prog3.d2*/
cout<<""<<endl;
cout<<"Shift = "<<shift<<endl;		/*Prints the standard shift value before encoding the cipher.*/
	while(getline(in1,str))
	{
	t=encodeCaesarCipher(str,shift);/*Call the encoding function encodeCaesarCipher().*/
	cout<<t<<endl;
	}
in1.close();
}

string encodeCaesarCipher(string str,int shift)
{
unsigned i;
	for(i=0;i<str.length();i++)
	{
	str[i]=new_position(str[i],shift);/*Calls the fuction new_position() to shift the character according to the mentioned shift value.*/
	}
return str;
}

int new_position(char c,int shift)
{
int v;
v=c;
int j=shift/26;
j=shift-(j*26);
	if(v>96&&v<123)			/*Compares the value with the standard ASCII values and performs the shift accordingly.*/
	{
	v=v+j;
		if(shift>0)
		{
			if(v>122)
			{
			v=v-122;
			v=96+v;
			}
		}
		else
		{
			if(v<97)
			{
			v=97-v;
			v=123-v;
			}
		}
	}
	if(v>64&&v<91)
	{
	v=v+j;
		if(shift>0)
		{
			if(v>90)
			{
			v=v-90;
			v=64+v;
			}
		}
		else
		{
			if(v<65)
			{
			v=65-v;
			v=91-v;
			}
		}
	}
return v;
}

void error(string msg)			/*Standard error function to display the error message.*/
{
cout<<msg<<endl;
}

