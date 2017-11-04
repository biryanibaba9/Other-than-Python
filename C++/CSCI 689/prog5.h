/*
 Assignment-5	Due:09/30/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/
/*All the header files and default function prototypes are mentioned in this file.*/
#ifndef const_value
#define const_value
#include<iostream>
#include<cstdlib>
#include<string>
#include<cmath>
#include<vector>
#include<fstream>
using namespace std;
/*Default function prototypes.*/
void buildMineField(vector<vector <bool> >& mines, const double& mineProb);
void fixCounts(const vector<vector <bool> >&mines, vector <vector <unsigned> >& count);
void displayMineLocations(const vector<vector <bool> >& mines);
void displayMineCounts(const vector<vector <unsigned> >& count);
#endif
