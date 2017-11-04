/*
 Assignment-7	Due:10/19/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/
/*This is the header file for Date.cc which also has the Date class definition.*/
#ifndef const_value
#define const_value
#include<iostream>
#include<string>
#include<vector>
#include<cstdlib>
#include<fstream>
#include<sstream>
using namespace std;

const vector<string> vecmonths{"January","February","March","April","May","June","July","August","September","October","November","December"};
string intToString(const int& a);

/*Class declaration.*/
class Date {
private: string month;	/*Declaration of Private variables and function prototypes.*/
	 int day;
	 int year;
int daysInMonth(const string& m) const;
bool isLeapYear() const;
bool isValidMonth() const;
public:				/*Declaration of Public function prototypes and variables.*/
friend istream& operator>>(istream& is, Date& d);
friend ostream& operator<<(ostream& os,const Date& d);
Date(const string& m="January",const int& d=1,const int& y=2000)
{
setMonth(m);
setDay(d);
setYear(y);
Month();
}
void setMonth(const string& m);
void setDay(const int& d);
void setYear(const int& y);
string getMonth() const;
int getDay() const;
int getYear() const;
void Month();
bool isValidDate() const;
string toString() const;

/*Additional functions for the Date class from Assignment 7.*/
Date (const Date& d);
Date& operator=(const Date& d);
Date& addDay(const int& n);
Date& addMonth(const int& n);
Date& addYear(const int& n);
int dayIndex() const;
int monthIndex() const;
};
unsigned dateDiff(const Date& d1,const Date& d2);
#endif
