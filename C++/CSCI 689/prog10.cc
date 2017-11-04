/*
 Assignment-10	Due:11/15/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

/* A Simple Calculator*/

#include "prog10.h"
/*Main Function*/
int main()
{
        string str;
        stack <double> S;
        while(cin>>str)
        process_token(str,S);
        return 0;
}

/*Process_token function*/
void process_token(const string& token, stack <double>& S)
{
	double stackpop;
	i=0;
	while(i<token.length())
	{
		if((token[i]=='-')||(token[i]=='+'))
		{
			if(unarySign(token[i],token,i))
			{
				if(token[i]=='-')
					optr=-1;
				if(token[i]=='+')
					optr=1;
				i++;
			}
		}
		if(token[i]=='=')
		{
			printResult(S);
		}
		if(token[i]=='.')
		{
			double num=getNumber(token[i],token,i,true);
			S.push(num);
			num=stackpop;
		}
		if(isValidOperator(token[i]))
		{
			if(S.size()>1)
			{
				double a=S.top();
				stackpop=popStack(S);
				double b=S.top();
				stackpop=popStack(S);
				double c=operation(token[i],a,b);
				S.push(c);
			}
			else
			{
				if(token[i]=='+')
					cerr<<"error: stack is empty"<<endl;
			}
		}
		if(token[i]=='c')
		{
			emptyStack(S);
		}
		if(token[i]=='\n')
		{
			i=0;
		}
		if(isdigit(token[i]))
		{
			double num=getNumber(token[i],token,i,false);
			if(stackpush==1)
				S.push(num);
		}
		if(token[i]=='!')
		{
			cerr<<"error: character '!' is invalid"<<endl;
		}
		i++;
	}
}

/*UnarySign Function*/
bool unarySign(const char& c, const string& token, const unsigned& i)
{
	char x1=c,x2=c;x2=x1;x1=x2;
	if((isdigit(token[i+1])||(token[i+1]=='.'))&&(i!=token.length()-1))
		return true;
	else
		return false;
}

/*FloatPoint function*/
bool floatPoint(const char& c, const string& token, const unsigned& i)
{
	char x1=c,x2;x2=x1;x1=x2;
	unsigned l=token.length();
	if(isdigit(token[i+1])&&token[i+2]!='.'&&i!=(l-1))
	return true;
	else 
	return false;
}

/*GetNumber Function.*/
double getNumber(const char& c,const string& token,unsigned& i,const bool& floatPointFlag)
{
	if(!floatPointFlag)
	{
		double x=c-48;
		if(isdigit(token[i+1]))
		{
			double x2=token[i+1]-48;
			i++;
			x=(x*10)+x2;
			if(token[i+1]=='.')
			{
				i++;
				if(isdigit(token[i+1]))
				{
					i++;
					double dcim1=token[i]-48;
					dcim1=dcim1/10;
					x=x+dcim1;
					if(isdigit(token[i+1]))
					{
						i++;
						double dcim2=token[i]-48;
						dcim2=dcim2/100;
						x=x+dcim2;
					}
				}
			}
		}
		if(token[i+1]=='.')
		{
			i++;
			if(floatPoint(token[i],token,i))
			{
				if(isdigit(token[i+1]))
				{
					i++;
					double dcim1=token[i]-48;
					dcim1=dcim1/10;
					x=x+dcim1;
					if(isdigit(token[i+1]))
					{
						i++;
						double dcim2=token[i]-48;
						dcim2=dcim2/100;
						x=x+dcim2;
					}
				}
			}
			else
			{
				cerr<<"error: number '"<<token[i-1]<<token[i]<<token[i+1]<<token[i+2]<<token[i+3]<<"' is invalid"<<endl;
				stackpush=0;
			}
		}
		x=x*optr;
		optr=1;
		return x;
	}
	else
	{
		double td=0;
		if(floatPoint(token[i],token,i))
		{
			i++;
			if(isdigit(token[i]))
			{
				double td2=token[i]-48;
				td2=td2/10;
				td=td+td2;
				i++;
			}
			td=td*optr;
			optr=1;
			return td;
		}
	}
	return 0;
}

/*IsValidOperator Function.*/
bool isValidOperator(const char& c)
{
	if((c=='+')||(c=='-')||(c=='/')||(c=='*'))
		return true;
	else
		return false;
}


/*Operation function.*/
double operation( const char& c, const double& a, const double& b)
{
	switch(c)
	{
		case'+':
		return a+b;
		case'-':
		return b-a;
		case'*':
		return a*b;
		case'/':
		return b/a;
	}
	return 0;
}

/*PopStack function.*/
double popStack( stack <double> &S)
{
	double x=0;
	if(S.size()==0)
		cerr<<"error: stack is empty"<<endl;
	else
	{
		x=S.top();
		S.pop();
	}
	return x;
}

/*PrintResult function.*/
void printResult(const stack <double>& S)
{
	if(S.size()>0)
	{
		cout<<setw(8)<<fixed<<setprecision(2);
		cout<<S.top()<<endl;
	}
	else
		cerr<<"error: stack is empty"<<endl;

}


/*EmptyStack function.*/
void emptyStack( stack <double> &S)
{
	for(unsigned j=S.size();j>0;j--)
	S.pop();
}

