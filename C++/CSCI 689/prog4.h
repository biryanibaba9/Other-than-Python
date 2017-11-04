/*
 Assignment-4	Due:09/22/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/
/*Standard header files and the function prototypes*/
#ifndef PROH4_H
#define PROG4_H
#include<iostream>
#include<string>
#include<fstream>
#include<cstdlib>
using namespace std;
const string file1 = "/home/cs689/progs/16f/p4/prog4-in.cc"; /*Source for the input file*/
const string file2 = "/home/cs689/progs/16f/p4/prog4-out.cc";			/*Source for the output file*/
/*Standard prototypes for the defined functions*/
void open_files (ifstream& is, ofstream& os);
void close_files (ifstream& is, ofstream& os);
void process_data (ifstream& is, ofstream& os);
void error (string str);
#endif
