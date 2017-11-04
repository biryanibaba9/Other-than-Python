/*
 Assignment-7	Due:10/19/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/
/*The Date Class*/

#include "Date.h"	/*Including the header file Date.h*/
istream& operator >>(istream& is, Date& d)	/*Implementing the input stream friend function*/
{
is>>d.month>>d.day;
d.Month();
char c=is.get();
c=is.get();
if(isdigit(c))
{
is.unget();
is>>d.year;
}
else
is>>d.year;
return is;
}

ostream& operator <<(ostream& os, const Date& d)	/*Implementing the output stream friend function*/
{
    os<<d.month<<" "<<d.day<<", "<<d.year;
    return os;
}


void Date::Month()	/*Implementation of the Month() fuction.*/
{
month[0]=toupper(month[0]) ;
unsigned i=1;
while(i<month.size())
{
month[i]=tolower(month[i]) ;
i++;
}
}


bool Date::isValidDate() const	/*Returns a boolean value for the function isValidDate.*/
{
if(isValidMonth())
{
int days=daysInMonth(month);
if(day<=days)
return true;
else
return false;
return false;
}
return false;
}

bool Date::isValidMonth() const		/*Returns a boolean value for the function isValidMonth.*/
{
bool b=false;
for(unsigned int i=0; i<vecmonths.size();i++)
{
if(month==vecmonths[i])
{
b=true;
break;
}
else
b=false;
}
return b;
}

int Date::daysInMonth(const string& m) const	/*Sets the value for days in a month according to the month value.*/
   {
     int dayInMonth=0;
     if(m=="January" || m== "March" || m=="May" || m== "July"|| m== "August" || m== "October" || m== "December"  )
     dayInMonth=31;
     else if (m=="February")
	{
              if(isLeapYear())
               dayInMonth=29;
              else
               dayInMonth=28;
	}
	else if (m== "April" || m== "June" ||  m== "September" || m== "November" )
           dayInMonth=30;
         else
           cout<<"Invalid month"<<endl;
         return dayInMonth;
    }


bool Date::isLeapYear() const	/*Function checks if the specified year is a leap year and returns a boolean value.*/
    {
       if ((year % 4 == 0) && !(year % 100 == 0))
	return true;
	else if(year % 400 == 0)
	return true;
	else
	return false;
    }


string Date::toString() const
{
string nmonth="";
string nmonths=getMonth();
int i=0,dy=day,yr=year;
while(i<3)
{
nmonth=nmonth+nmonths[i];
i++;
}
string days=intToString(dy);
string years=intToString(yr);
string newstr=days+'-'+nmonth+'-'+years;
return newstr;
}

string intToString(const int& a)
{
ostringstream ss;
ss<<a;
string s=ss.str();
return s;
}

void Date::setMonth(const string& m)
   {
      month=m;
      Month();
   }
void Date::setDay(const int& dy)
    {
      day=dy;
    }
void Date::setYear(const int& yr)
    {
      year=yr;
    }
string Date::getMonth() const
    {
      return month;
    }
int Date::getDay() const
    {
      return day;
    }
int Date::getYear() const
    {
      return year;
    }

/*Copy constructor*/
Date::Date(const Date& d):month(d.month),day(d.day),year(d.year){}

/*Overloading assignment operator.*/
Date & Date::operator=(const Date& d)
{
if(this!=&d)
{
day=d.day;
month=d.month;
year=d.year;
}
return *this;
}

/*Function to addDay.*/
Date& Date::addDay(const int& n)
{
int ndays=n;
int dim=daysInMonth(month);
int npos;
if(ndays>0)
{
if((dim-day)>=n)
{
day=day+n;
}
else
{
ndays=ndays-(dim-day);
while(ndays>0)
{
npos=monthIndex();
if(npos<=11)
{
if(npos==11)
{
month=vecmonths[0];
year=year+1;
}
else
month=vecmonths[npos+1];
}
dim=daysInMonth(month);
day=0;
if(ndays<=dim)
{
day=ndays;
ndays=0;
}
else
{
ndays=ndays-dim;
}
}
}
}
if(ndays<0)
{
while(ndays<0)
{
if(day==1)
{
npos=monthIndex();
if(npos>=0)
{
if(npos==0)
{
month=vecmonths[11];
year=year-1;
if(year==0)
year=year-1;
}
else
{
month=vecmonths[npos-1];
}
}
day=daysInMonth(month);
ndays++;
}
else
{
day=day-1;
ndays++;
}
}
}
return *this;
}

/*Function to add n months to the Date object d.*/
Date& Date::addMonth(const int& n)
{
int nY=n/12;
int nM=n%12;
int mz=vecmonths.size();
for(int i=0;i<mz;i++)
{
if(vecmonths[i]==month)
{
if((i+nM)>mz && n>0)
{
int j=(i+nM)-mz;
year=year+1;
month=vecmonths[j];
}
else if((i+nM)== mz && n>0)
{
int j=(i+nM)-mz;
year=year+1;
month=vecmonths[j];
}
else if((i+nM)<12 && n<0)
{
if(i<6 && ((i+nM)>=0))
{
month=vecmonths[i+nM];
}
else
{
year=year-1;
int f_month=12+(i+nM);
month=vecmonths[f_month];
}
}
else if((i+nM)<mz&& n>0)
{
year=year+nY;
month=vecmonths[i+nM];
if(isLeapYear()) 
{
if(month=="February")
{
if(day>29)
day=1;
month="March";
}
}
}
else
{
month=vecmonths[i+nM];
year=year+nY;
}
break;
}
}
return *this;
}

/*Function to addYear.*/
Date& Date::addYear(const int& n)
{
year=year+n;
if(n<0&&year==0)
year=-1;
else if(n>0&&year==0)
year=1;
else
year=year;
if(!(isLeapYear()))
{
if(day==29 && month=="February")
{
day=1;
month="March";
}
}
return *this;
}

/*Function for dayIndex*/
int Date::dayIndex() const
{
int id=0;
int a=0;
Date compare=(*this);
Date ddate("January",1,1);
if(compare.year>0)
{
for(int i=1;i<compare.year;i++)
{
Date b;
b.year=compare.year;
b.setYear(i);
if(b.isLeapYear())
id=id+366;
else
id=id+365;
}
int mI=compare.monthIndex();
for(int i=0;i<mI;i++)
{
string st=vecmonths[i];
int d=daysInMonth(st);
id=id+d;
}
id=compare.day+id;
return id;
}
else
{
int i=1;
while(compare.year<0)
{
int mI=compare.monthIndex();
int d=daysInMonth(compare.month);
id=id+(d-compare.day);
compare.day=0;
if((mI+1)<=11)
compare.month=vecmonths[mI+1];
else
{
compare.month=vecmonths[0];
compare.year=compare.year+1;
if(compare.year==0)
compare.year=1;
}
}
while(i<(-(compare.year)))
{
Date b;
b.year=compare.year;
b.setYear(i);
if(b.isLeapYear())
a++;
i++;
}
id=-(id)-1-a;
}
if((day==1)&&(month=="January")&&(year==1))
return 1;
else
return id;
}

/*Private function which returns index value of a month.*/
int Date::monthIndex() const
{
int in=0;
for(unsigned i=0;i<vecmonths.size();i++)
{
if(month==vecmonths[i])
in=i;
}
return in;
}

/*Function that returns the difference between two date objects.*/
unsigned dateDiff(const Date& d1,const Date& d2)
{
int dtDiff1=0,dtDiff2=0;
unsigned result=0;
dtDiff1=d1.dayIndex();
dtDiff2=d2.dayIndex();
if(dtDiff1<dtDiff2)
result=dtDiff2-dtDiff1;
else
result=dtDiff1-dtDiff2;
if(((d1.getYear()<0) && (d2.getYear()>0)) || ((d1.getYear()<0) && (d2.getYear()>0)))
result=result-1;
return result;
}
