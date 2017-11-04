/*
 Assignment-5	Due:09/30/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/
/*THE GAME OF MINESWEEPER*/
#include "prog5.h"
/*Global declaration of recurring variables.*/
int smine;
double mineProb;
int i, j, k;
double rnd;
/*This function sets the count value for each location.*/
void fixCounts(const vector <vector <bool> >& mines, vector <vector <unsigned> >& count)
{
smine=sqrt(mines.size());
count.resize(smine*smine);
	for(i=0;i<smine;i++)
	{
		for(j=0;j<smine;j++)
		{
		count[i].push_back(0);
		}
	}
	for(i=0;i<smine;i++)
	{
		for(j=0;j<smine;j++)
		{
		if(mines[i][j]==1)
			{
			count[i][j]=count[i][j]+1;
			}
			if(j+1<smine)
		{
			if(mines[i][j+1]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		if(j-1>=0)
		{
			if(mines[i][j-1]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		if((i-1>=0)&&(j+1<smine))
		{
			if(mines[i-1][j+1]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		if(((i+1)<smine)&&((j-1)>=0))
		{
			if(mines[i+1][j-1]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		if((i-1>=0)&&(j-1>=0))
		{
			if(mines[i-1][j-1]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		if(i+1<smine)
		{
			if(mines[i+1][j]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		if((i+1<smine)&&(j+1<smine))
		{
			if(mines[i+1][j+1]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		if(i-1>=0)
		{
			if(mines[i-1][j]==1)
			{
			count[i][j]=count[i][j]+1;
			}
		}
		}
	}
}

/*This fuction builds the mine field by using the random number generator.*/
void buildMineField(vector<vector<bool> >& mines, const double& mineProb)
{
smine=sqrt(mines.size());
	for(i=0;i<smine;i++)
	{
	mines.push_back(vector<bool>(smine));
		for(j=0;j<smine;j++)
		{
		mines[i].push_back(1);
		rnd=rand()/(double(RAND_MAX)+1);
			if(rnd<mineProb)
			mines[i][j]= true;
			else
			mines[i][j]= false;
		}
	}
	srand(1); /*Calling the srand function.*/
}

/*This function displays the mine counts in each location.*/
void displayMineCounts(const vector<vector <unsigned> >& count)
{
smine=sqrt(count.size());
string str = "-----";
string str1= "--------";
cout<<' ';
for(i=0;i<smine;i++)
cout<<str;
if(i==5)
cout<<str1;
if(i==10)
cout<<str1+str1+"--";
cout<<endl;
for(j=0;j<smine;j++)
{
for(i=0;i<smine;i++)
cout<<"|     |";
cout<<endl;
for(k=0;k<smine;k++)
{
cout<<"|  "<<count[j][k]<<"  |";
}
cout<<endl;
for(i=0;i<smine;i++)
cout<<"|     |";
cout<<endl;
cout<<' ';
for(i=0;i<smine;i++)
cout<<str;
if(i==5)
cout<<str1;
if(i==10)
cout<<str1+str1+"--";
cout<<endl;
}
cout<<endl;
}

/*This function displays the mine locations.*/
void displayMineLocations(const vector <vector <bool> >& mines)
{
smine=sqrt(mines.size());
string str="-----";
string str1="--------";
cout<<' ';
for(i=0;i<smine;i++)
cout<<str;
if(i==5)
cout<<str1;
if(i==10)
cout<<str1+str1+"--";
cout<<endl;
for(i=0;i<smine;i++)
{
for(j=0;j<smine;j++)
cout<<"|     |";
cout<<endl;
for(k=0;k<smine;k++)
{
cout<<"|  ";
if(mines[i][k])
cout<<'X';
else
cout<<' ';
cout<<"  |";
}
cout<<endl;
for(j=0;j<smine;j++)
cout<<"|     |";
cout<<endl;
cout<<' ';
for(j=0;j<smine;j++)
cout<<str;
if(j==5)
cout<<str1;
if(j==10)
cout<<str1+str1+"--";
cout<<endl;
}
cout<<endl;
}

/*The main function*/
int main()
{
vector<vector <bool> >mines;
vector<vector <unsigned> >count;
while((cin>>smine)&&(cin>>mineProb))
{
mines.resize(smine*smine);
buildMineField(mines,mineProb);
fixCounts(mines,count);
cout<<"Mine Locations: Size Of Mine = "<<smine<<" x "<<smine<<", Prob of Mine = "<<mineProb<<endl;
displayMineLocations(mines);
cout<<"Mine Counts = "<<endl;
displayMineCounts(count);
mines.resize(0);
count.resize(0);
}
return 0;
}

