/*
 Assignment-10	Due:11/15/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

/*Header file*/

#ifndef const_val
#define const_val
#include<iostream>
#include<stack>
#include<string>
#include<iomanip>
using namespace std;

/*Function prototypes.*/
void process_token(const string& token, stack <double>& S);
bool floatPoint(const char& c, const string& token, const unsigned& i);
bool isValidOperator(const char& c);
double operation(const char& c, const double& x, const double& y);
double getNumber(const char& c, const string& token, unsigned& i,const bool& floatPointFlag);
double popStack( stack <double> &S);
void emptyStack( stack <double> &S);
bool unarySign(const char& c, const string& token, const unsigned& i);
void printResult( const stack <double> &S);
static double optr=1;
static int stackpush=1;
static unsigned i;
#endif
