/*
 Assignment-4	Due:09/22/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/
/*This program removes the comments from a source file*/

#include "prog4.h"
ifstream is;
ofstream os;
int main()
{
	open_files (is,os);	/*This function opens the files*/
	process_data (is,os);	/*This function removes the comments from a file*/
	close_files (is,os);	/*This function closes the opened files*/
	return 0;
}

void open_files (ifstream& is, ofstream& os)
{
is.open(file1.c_str());		/*Converts the opened string file into cstring*/
os.open(file2.c_str());
if(!is && !os)
{
error("File does not exist");	/*Error message if the file directory is not found*/
}
}

void error(string str)		/*Standard error function*/
{
cout<<str<<endl;
exit(EXIT_FAILURE);
}

void process_data (ifstream& is, ofstream& os)
{
string s;
int f1=0,f2=0,f3=0;
unsigned int pos;
while(getline(is,s))
{
string s1;
pos = s.size();
f2=0;
f3=0;
for(unsigned int i=0;i<s.size();i++)
{
if(s[i] == '/' && f1 == 0)		/*Checks for "*/
{
f3=1;
}
if(s[i] == '/' && s[i+1] == '/' && f3 == 0 && f1==0)	/*Checks for //*/
{
f2=1;
pos=i;
}
if(s[i] == '/' && s[i+1] == '*' && f2==0 && f3==0)
{
f1=1;
i+=2;
}
if(s[i] == '*' && s[i+1] == '/' && f2==0 && f3==0)
{
f1=0;
i+=2;
if(s[i] == '/' && s[i+1] == '*')
{
f1=1;
}
}
if(f1==0)
{
if(i<pos)
{
s1 +=s[i];
}
}
}
if(!s1.empty())
{
os<<s1<<endl;
}
}
}

void close_files(ifstream& is, ofstream& os)
{
is.close();		/*Closes the opened files*/
os.close();
}
