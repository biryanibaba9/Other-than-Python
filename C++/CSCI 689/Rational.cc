/*
 Assignment-8	Due:10/27/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

#include "Rational.h"

/*Public Constructor*/
Rational::Rational(const int& n, const int& d)
{
nr=n;
dr=d;
	if(d==0)
	cerr<<"Error: division by zero"<<endl;
		if(nr>0 && dr<0)
		{
		nr=-nr;
		dr=-(dr);
		}
	if(gcd(nr,dr)>0)
	{
	nr=nr/gcd(n,d);
	dr=dr/gcd(n,d);
	}
}

/*Copy constructor*/
Rational::Rational(const Rational& r)
{
nr=r.nr;
dr=r.dr;
}

/*Assignment operator */
Rational& Rational::operator=(const Rational& r)
{
nr=r.nr;
dr=r.dr;
return *this;
}

/*Functions that overload the +=,-=,*=,/= operators.*/
Rational& Rational::operator+=(const Rational& r)
{
nr=(nr*r.dr)+(r.nr*dr);
dr=(dr*r.dr);
return *this;
}

Rational& Rational::operator-=(const Rational& r)
{
nr=(nr*r.dr)-(r.nr*dr);
dr=(dr*r.dr);
int g=gcd(nr,dr);
nr=nr/g;
dr=dr/g;
return *this;
}

Rational& Rational::operator*=(const Rational& r)
{
nr=nr*r.nr;
dr=dr*r.dr;
return *this;
}

Rational& Rational::operator/=(const Rational& r)
{
nr=(nr*r.dr);
dr=(dr*r.nr);
int g= gcd(nr,dr);
nr=(nr/g);
dr=(dr/g);
return *this;
}

/*Overloading of the pre ++ & -- operators.*/
Rational& Rational::operator++()
{
nr=nr+dr;
return *this;
}

Rational& Rational::operator--()
{
nr=nr-dr;
return *this;
}

/*Overloading of the +,-,*,/ operators.*/
Rational operator+(const Rational& r1, const Rational& r2)
{
Rational r;
r.nr=((r1.nr*r2.dr)+(r2.nr*r1.dr));
r.dr=r1.dr*r2.dr;
return r;
}

Rational operator-(const Rational& r1,const Rational& r2)
{
Rational r;
r.nr=((r1.nr*r2.dr)-(r2.nr*r1.dr));
r.dr=r1.dr*r2.dr;
return r;
}

Rational operator*(const Rational& r1,const Rational& r2)
{
Rational r;
r.nr=r1.nr*r2.nr;
r.dr=r1.dr*r2.dr;
return r;
}

Rational operator/(const Rational& r1,const Rational& r2)
{
Rational R;
R.nr=r1.nr*r2.dr;
R.dr=r1.dr*r2.nr;
return R;
}

/*Function that overloads relational operators.*/
bool operator!=(const Rational& r1,const Rational& r2)
{
double a1,a2,b1,b2;
a1=r1.nr;
a2=r2.nr;
b1=r1.dr;
b2=r2.dr;
if(a1/b1!=a2/b2)return true;
else return false;
}

bool operator==(const Rational& r1,const Rational& r2)
{
double a1,a2,b1,b2;
a1=r1.nr;
a2=r2.nr;
b1=r1.dr;
b2=r2.dr;
if(a1/b1==a2/b2)return true;
else return false;
}

bool operator>=(const Rational& r1,const Rational& r2)
{
double a1,a2,b1,b2;
a1=r1.nr;
a2=r2.nr;
b1=r1.dr;
b2=r2.dr;
if(a1/b1>=a2/b2)return true;
else return false;
}

bool operator<=(const Rational& r1,const Rational& r2)
{
double a1,a2,b1,b2;
a1=r1.nr;
a2=r2.nr;
b1=r1.dr;
b2=r2.dr;
if(a1/b1<=a2/b2)return true;
else return false;
}

bool operator>(const Rational& r1,const Rational& r2)
{
double a1,a2,b1,b2;
a1=r1.nr;
a2=r2.nr;
b1=r1.dr;
b2=r2.dr;
if(a1/b1>a2/b2)return true;
else return false;
}

bool operator<(const Rational& r1,const Rational& r2)
{
double a1,a2,b1,b2;
a1=r1.nr;
a2=r2.nr;
b1=r1.dr;
b2=r2.dr;
if(a1/b1<a2/b2)return true;
else return false;
}

/*Function for overloading post ++ and -- operators.*/
Rational& Rational::operator++(int unused)
{
static Rational f = (*this);
int i=unused;
unused=i;
nr=nr+dr;
return f;
}
 
Rational& Rational::operator--(int unused)
{
static Rational f = (*this);
int i=unused;
unused=i;
nr=nr-dr;
return f;
}

/*Function for input stream.*/
istream& operator>>(std::istream& istr,Rational& r)
{
char c,c1,c2;
int f,f1;
istr.get(c1); 
r.nr=1;
r.dr=1;
	if(c1==9)
	istr>>r.nr;
	else
	{
	istr.unget();
	istr>>r.nr;
	}
	istr.get(c1);
		if(c1==10)
		return istr;
		if(c1==9||c1==32)
		{
		istr.get(c2);
			if(c2!=10)
			{
			c=c2;
				if(c!='/')
				{
				f1=1;
				cerr<<"Error: line \"\t"<<r.nr<<" "<<c<<" ";
				}
			}
			else
			return istr;
		}
		if(c1=='/')
		{
		c=c1;
		}
		istr.get(c1);
			if(c1==10)
			return istr;
			else if(c1==10)
			{
			istr.get(c2);
				if(c2!=10)
				{
				istr.unget();
				istr>>r.dr;
				}
				else
				return istr;
			}
			else
			{
			istr.unget();
			istr>>r.dr;
			}
				if(f1==1)
				cerr<<r.dr<<"\" contains invalid number"<<endl;
				istr.get(c1);
					if(c1==10)
					return istr;
						if(c1==32||c1==9)
						{
						istr.get(c2);
						istr.unget();
						istr>>f;
						if(c2!=10)
						cerr<<"Error: line \""<<r.nr<<c<<r.dr<<" "<<f<<"\" contains invalid number"<<endl;
						else
						return istr;
						}
	return istr;
}


/*Function for output stream.*/
ostream& operator<<(ostream& ostr, const Rational& f)
{
Rational r=f;
int a,b;
	if(r.gcd(r.nr,r.dr)!=0)
	{
	a=r.nr/(r.gcd(r.nr,r.dr));
	b=r.dr/(r.gcd(r.nr,r.dr));
	r.nr=a;
	r.dr=b;
	}
string result=resultPrint(r);
ostr<<result;
return ostr;
}

/*Funtion to print and return result*/
string resultPrint(Rational r)
{
stringstream ostr;
	if(r.dr==1||r.dr==0||r.nr==0)
	ostr<<r.nr;
	else
	{
		if(r.nr>0&&r.dr>0)
		ostr<<r.nr<<"/"<<r.dr;
		if(r.nr>0&&r.dr<0)
		ostr<<"-"<<r.nr<<"/"<<-(r.dr);
		if(r.nr<0 && r.dr>0)
		ostr<<"-"<<-(r.nr)<<"/"<<r.dr;
		if(r.nr<0&&r.dr<0)
		ostr<<-(r.nr)<<"/"<<-(r.dr);
	}
string result;
result=ostr.str();
return result;
}

/*Function for GCD.*/
int Rational::gcd(int x,int y)
{
int gcd=1;
	if((x==0)||(y==0))
	return 0;
		if(x<0)
		x=-x;
			if(y<0)
			y=-y;
	for(int i=1;(i<=x)&&(i<=y);i++)
	{
		if(((x%i)==0)&&((y%i)==0))
		gcd=i;
	}
return gcd;
}

