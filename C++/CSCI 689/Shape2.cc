/*
 Assignment-11	Due:11/28/2016
 Name: Shreyas Javvadhi
 Z-ID: Z180987
*/


#include "/home/cs689/progs/16f/p11/Shape2.h"

/*Square*/
Square::Square(const double& x)
{
length=x;
width=x;
}
Square:: Square(const Square& s1):Rectangle(s1.length,s1.width){}
Square& Square::operator=(const Square& s1)
{
  if(this!=&s1)
  {
    length=s1.length;
    width=s1.width;
  }
return *this;
}
Square& Square::operator+=(const Square& s1)
{
 if(this!=&s1)
 {
   length+=s1.length;
   width+=s1.width;
 }
return *this;
}
Square::~Square(){}
void Square::print() const
{
  cout<<" length = "<<length;
}

/*Rectangle*/
Rectangle:: Rectangle(const double& l1,const double& w1):length(l1),width(w1){}
Rectangle::Rectangle(const Rectangle& r1):length(r1.length),width(r1.width){}
Rectangle& Rectangle::operator=(const Rectangle& r1)
{
  if(this!=&r1)
	{
    	length=r1.length;
        width=r1.width;
        }
        return *this;
}
Rectangle& Rectangle::operator+=(const Rectangle& r1)
{
  if(this!=&r1)
    {
     length+=r1.length;
     width+=r1.width;
    }
        return *this;
}
Rectangle::~Rectangle(){}
double Rectangle::perimeter() const
{
   double p1;
   p1=2*(length+width);
   return p1;
}
double Rectangle::area() const
{
   double a1;
   a1=length*width;
   return a1;
}
void Rectangle::print() const
{
   cout<<" length = "<<length<<" : "<<"width = "<<width;
}


/*Circle*/
Circle:: Circle(const double& r1):radius(r1){}
Circle::Circle(const Circle& c1):radius(c1.radius){}
Circle& Circle::operator=(const Circle& c1)
{
if(this!=&c1)
radius=c1.radius;
return *this;
}
Circle& Circle::operator+=(const Circle& c1)
{
if(this!=&c1)
radius+=c1.radius;
return *this;
}
Circle::~Circle(){}
double Circle::perimeter() const
{
double p1;
p1=2*(PI)*(radius);
return p1;
}
double Circle::area() const
{
double a1;
a1=(PI)*(radius)*(radius);
return a1;
}
void Circle::print() const
{
cout<<" radius = "<<radius;
}

/*Equilateral Triangle*/
equTriangle::equTriangle(const double& eqt)
{
        a=eqt;
        b=eqt;
        c=eqt;
}
equTriangle::~equTriangle(){}
void equTriangle::print() const
{
        cout<<" length = "<<a;
}

/*Triangle*/
Triangle:: Triangle(const double& a,const double& b,const double& c):a(a),b(b),c(c){} 
Triangle::Triangle(const Triangle& t1):a(t1.a),b(t1.b),c(t1.c){} 
Triangle& Triangle::operator=(const Triangle& t1) 
{
if(this!=&t1)
{
	a=t1.a;
	b=t1.b;
	c=t1.c;
}
return *this;
}
Triangle& Triangle::operator+=(const Triangle& t1) 
{
if(this!=&t1)
{
	a+=t1.a;
	b+=t1.b;
	c+=t1.c;
}
return *this;
}
Triangle::~Triangle(){} 
double Triangle::perimeter() const 
{
double p1;
p1=a+b+c;
return p1;
}
double Triangle::area() const 
{
double are1,are;
are1=(a+b+c)/2;
are=sqrt(a*(are1-a)*(are1-b)*(are1-c));
return are;
}
void Triangle::print() const 
{
cout<<" a = "<<a<<" b = "<<b<<" c = "<<c;
}

/*Right Angled Triangle*/
rightTriangle::rightTriangle(const double& h1,const double& h2) 
{
	a=h1;
	b=h2;
	c=sqrt(h1*h1+h2*h2);
}
rightTriangle::~rightTriangle(){} 
void rightTriangle::print() const 
{
cout<<" length = "<<a<<" : height = "<<b;
}
