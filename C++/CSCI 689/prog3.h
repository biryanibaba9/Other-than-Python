/*
 Assignment-3 Due:09/14/2016
 Name:Shreyas Javvadhi
 Z-ID:Z1809837
*/
/*Standard header file statements are mentioned in this file*/
#ifndef prog3_h_included
#define prog3_h_included
#include<iostream>
#include<string>
#include<fstream>
#include<cstdlib>
using namespace std;
void process_infile(int shift);
string encodeCaesarCipher(string,int);
int new_position(char,int);
void error(string);
const string file2="/home/cs689/progs/16f/p3/prog3.d2";	/*Path for the data file prog3.d2*/
const string file1="/home/cs689/progs/16f/p3/prog3.d1";	/*Path for the data file prog3.d1*/
#endif

