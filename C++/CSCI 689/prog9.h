/*
 Assignment-9	Due:11/4/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

/*Header File*/
#ifndef const_val
#define const_val
#include<iostream>
#include<string>
#include<cmath>
#include<vector>
#include<fstream>
#include<cstdlib>
using namespace std;
extern const int SEED;
/*Function prototypes*/
void initBoard(vector<vector <bool> >&,const unsigned& );
bool isSafe(vector< vector <bool> >&,const unsigned& ,const unsigned& );
void printBoard(vector <vector <bool> >& );
void solveNQueens(const unsigned& );
bool solveNqueensUtil(vector <vector <bool> >&,const unsigned& );
#endif
