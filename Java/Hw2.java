import java.io.*;
import java.util.*;
import java.util.regex.Pattern;

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.stream.Stream;

public class Hw2{

	public static void main(String args[])
	{
		int index = 0;
		String line1;
		String line2;
		int inc;
		
		try (Stream<String> lines = Files.lines(Paths.get(args[0])))
		{
    		for (String line : (Iterable<String>) lines::iterator)
    		{
        		line = line.replaceAll("^\\s+","");
				index = line.indexOf(" ");
				line1 = line.substring(0,index);
				line2 = line.substring(index);
				line2 = line2.trim();
				if(line.isEmpty())
					System.out.printf("Line is Empty");
				else
				{
					if(line1.contains("/"))
					{
						line1 = line1.split("/");
						int presentMonth = Integer.parseInt(line1[0]);
						int presentDay = Integer.parseInt(line1[1]);
						int presentYear = Integer.parseInt(line1[2]);
						if(line2 != "")
							{
								inc = Integer.parseInt(line2);
								if(Pattern.matches("/^\d+$/", line2))
									{
										if(presentDay > 0 && presentDay<31)
											{
												Dte x = new Dte(presentMonth, presentDay, presentYear);
												Dte y = new Dte(x);
												x.addDays(inc);
												System.out.printf("Result after adding is: %s%n",x);
											}
										else
											System.out.printf("Day is out of range");
									}
								else
									System.out.printf("increment is not integer");
							}
						else
							System.out.printf("no increment");
					}				
					else
					System.out.printf("date has no slahes");
    			}
    		}
    		
		}
		catch (IOException e)
		{
			System.out.println("Invalid file path");
		}
	}
	
}
