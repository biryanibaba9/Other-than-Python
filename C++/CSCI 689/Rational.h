/*
 Assignment-8	Due:10/27/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

/*Header File*/

#ifndef const_val
#define const_val
#include<iostream>
#include<fstream>
#include<sstream>
using namespace std;

/*Class definition.*/
class Rational
{
/*Private variables and functions.*/
	int nr,dr;
	friend Rational operator*(const Rational& r1, const Rational& r2);
	friend Rational operator/(const Rational& r1, const Rational& r2);
	friend Rational operator-(const Rational& r1, const Rational& r2);
	friend Rational operator+(const Rational& r1, const Rational& r2);
	friend ostream& operator<<(ostream& ostr, const Rational& z);
	friend istream& operator>>(istream& istr, Rational& r);
	friend bool operator==(const Rational& r1, const Rational& r2);
	friend bool operator!=(const Rational& r1, const Rational& r2);
	friend bool operator<(const Rational& r1, const Rational& r2);
	friend bool operator>(const Rational& r1, const Rational& r2);
	friend bool operator>=(const Rational& r1, const Rational& r2);
	friend bool operator<=(const Rational& r1, const Rational& r2);
	friend string resultPrint(Rational r);
	int gcd(int x,int y);
/*Public variables and functions.*/
	public:
		Rational(const int& n=0, const int& d=1);
		Rational(const Rational& r);
		Rational& operator=(const Rational& r);
		Rational& operator-=(const Rational& r);
		Rational& operator+=(const Rational& r);
		Rational& operator*=(const Rational& r);
		Rational& operator/=(const Rational& r);
		Rational& operator++(int unused);
		Rational& operator--(int unused);
		Rational& operator++();
		Rational& operator--();
};
#endif
