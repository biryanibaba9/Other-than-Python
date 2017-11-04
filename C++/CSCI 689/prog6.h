/*
 Assignment-6	Due:10/10/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/
/*This is the header file which also has the class definition */
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
class Date {
private: string month;
	 int day;
	 int year;
int daysInMonth(const string& m) const;
bool isLeapYear() const;
bool isValidMonth() const;
public:
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
};
#endif
