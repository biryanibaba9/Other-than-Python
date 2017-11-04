import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.io.Writer;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.io.*;
import java.io.Serializable;

public class Hw4a
{
	public static void main(String ags[])
	{
		int totalRecords = 0;
		int orderChars = 0;
		int linesOrderChars = 0 ;

		try
		{
			Writer wr = new FileWriter("movienames2.txt");
 			FileOutputStream ser = new FileOutputStream("movie-matrix2.ser");

BufferedReader input = new BufferedReader(new InputStreamReader(new FileInputStream("/home/turing/t90rkf1/d470/dhw/hw4-movies/movie-names.txt"), "ISO-8859-1"));
			String str;
			while ((str = input.readLine()) != null)
			{
				totalRecords++;
				int index = str.indexOf("|");
				String movieNumber = str.substring(0,index);
				String movieName = str.substring(index+1);

				StringBuilder movieCopy = new StringBuilder(movieName);
				HashMap<Character,Character> conversionMap = new HashMap<Character, Character>(); 
				conversionMap.put('\u00E8', 'e');
				conversionMap.put('\u00E9', 'e');
				conversionMap.put('\u00F6', 'o');
				conversionMap.put('\u00C1', 'A');


				if(!movieName.matches("\\A\\p{ASCII}*\\z"))
				{
					linesOrderChars++;
					for(int i = 0; i<movieCopy.length(); i++)
					{
						String charCheck = ""+movieCopy.charAt(i);
                        			if(!charCheck.matches("\\A\\p{ASCII}*\\z"))
						{
							orderChars++;
							char c = conversionMap.get(movieCopy.charAt(i));
							movieCopy.setCharAt(i,c);
    							System.out.println("non-Ascii character: " + charCheck + " in line " + totalRecords + " char " + (movieNumber.length()+1+i+1));
                            				System.out.println(movieName + "\n");
						}
					}
				}

				if(movieNumber.length() == 1)
					wr.write("000" + movieNumber);
				else if(movieNumber.length() == 2)
					wr.write("00" + movieNumber);
				else if(movieNumber.length() == 3)
					wr.write("0" + movieNumber);
				else
					wr.write(movieNumber);

				wr.write(" " + movieCopy + "\n");
			}

			wr.close();
			System.out.println("Number of lines containing non-Ascii characters:  " +linesOrderChars);
                	System.out.println("Total number of non-Ascii characters:             " +orderChars);
                	System.out.println("Total number of lines:                            " +totalRecords);

			try
			{
			BufferedReader input1 = new BufferedReader(new InputStreamReader(new FileInputStream("/home/turing/t90rkf1/d470/dhw/hw4-movies/movie-matrix.txt"), "UTF-8"));
                        List<List<String>> movieMatrixFile = new ArrayList<>();
			String str1;
			OutputStream os = new BufferedOutputStream(ser);
            		ObjectOutput oo = new ObjectOutputStream(os);
                            while ((str1 = input1.readLine()) != null)
                            {
                                List<String> names = new ArrayList<>();
                                names.add(str1);
                              for(int i = 0; i< names.size(); i++)
                              {
                                  String rating;
                                  rating = names.get(i);
                                  movieMatrixFile.add(Arrays.asList(rating.split(";")));
                              }
                              for(int i = 0; i < movieMatrixFile.size(); i++ )
                              {
                                  for(int j = 0; j < movieMatrixFile.get(i).size(); j++)
                                  {
                                      movieMatrixFile.get(i).get(j).trim();
                                  }
                              }
                           	oo.writeObject(movieMatrixFile);
                            }
                        	oo.close();
			}
			catch(IOException e)
			{
			System.out.println("Check the input file name");
			}
		}

		catch(IOException e)
		{
			System.out.println("Check the input filename");
		}
	}
}
