/*
 Assignment-9	Due:11/4/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

/*N Queens Puzzle*/

#include "prog9.h"

extern const int SEED= time(0);

/*Main function*/

int main()
{
for(int h=1;h<=8;h++)
{
solveNQueens(h);
cout<<endl;
}
return 0;
}


/*Function to create 2 dimensional vector and print appropriate board.*/

void solveNQueens(const unsigned& n)
{
vector<vector <bool> >board(n, vector <bool>(n));
initBoard(board, n);
cout<<"Board Size = "<<n<<endl;
if(solveNqueensUtil(board, 0)== false)
{
cout<<endl<<"Solution does not exist"<<endl;
cout<<endl;
}
else
printBoard(board);
}

/*Recursive function that computes appropriate solution for the board*/

bool solveNqueensUtil(vector <vector <bool> >& board,const unsigned& row)
{
if(row>=(board.size()))
return true;
unsigned x=rand()%(board.size());
unsigned i, column;
	for(i=0;i<board.size();i++)
	{
	column=x+i;
		if(column>=board.size())
		column-=board.size();
			if(isSafe(board,row,column))
			{
			board[row][column]=true;
				if(solveNqueensUtil(board,row+1))
				return true;
			board[row][column]=false;
			}
	}
return false;
}


/*Function that retrns the safety of the queens position.*/

bool isSafe(vector< vector<bool> >& board,const unsigned &row,const unsigned &col)
{
unsigned a,b;
int i,j;
for(a=0;a<board.size();a++)
{
	for(b=0;b<board.size();b++)
	{
		if(board[a][b])
		{
		i=row-a;
		j=col-b;
			if(i<0)
			i=-1*i;
		if(j<0)
		j=-1*j;
			if(col==b||row==a||i==j)
			return false;
		}
	}
}
return true;
}


/*Function to print Board*/
void printBoard(vector <vector <bool> >& board)
{
unsigned a,b,c,sz;
sz=board.size();
string str1="-----";
cout<<" ";
for(a=1;a<sz;a++)
cout<<"-"<<str1;
cout<<"-----"<<endl;
	for(a=0;a<sz;a++)
	{
		for(c=0;c<sz;c++)
		cout<<"|     ";
	cout<<"|"<<endl;
		for(b=0;b<sz;b++)
		{
		cout<<"|  ";
			if(board[a][b])
			cout<<'Q';
			else
			cout<<' ';
		cout<<"  ";
		}
	cout<<"|"<<endl;
		for(c=0;c<sz;c++)
		cout<<"|     ";
	cout<<"|"<<endl;
	cout<<" ";
		for(c=1;c<sz;c++)
		cout<<"-"+str1;
	cout<<"-----"<<endl;
	}
cout<<endl;
}

/*Function to set the initial position of the board.*/
void initBoard(vector<vector <bool> >& board,const unsigned& n)
{
unsigned i,j;
srand(SEED);
for(i=0;i<n;i++)
{
for(j=0;j<n;j++)
board[i][j]=false;
}
}



