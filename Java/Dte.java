public class Dte{

private int presentYear;
private int presentMonth;
private int presentDay;

static MonthInfo[] monthData = {new MonthInfo(1,31), new MonthInfo(2,28), new MonthInfo(2,31), new MonthInfo(3,31), new MonthInfo(4,30), new MonthInfo(5,31), new MonthInfo(6,30), new MonthInfo(7,31), new MonthInfo(8,31), new MonthInfo(9,30), new MonthInfo(10,31), new MonthInfo(11,30), new MonthInfo(12,31)};

public Dte ()           
	{
		this.presentYear = 0;
		this.presentMonth = 0;
		this.presentDay = 0;
	}
	
public Dte (int presentMonth, int presentDay, int presentYear)         
	{
		this.presentYear = presentYear ;
		this.presentMonth = presentMonth;
		this.presentDay = presentDay;
	}
	
public Dte (Dte a)           
	{
		presentYear = a.presentYear;
		presentMonth = a.presentMonth;
		presentDay = a.presentDay;
	}
	
public int getYear ()                     
	{
		return this.presentYear;
	}
	
public int getMonth ()                
	{
		return this.presentMonth;
	}
	
public int getDay ()                  
	{
		return this.presentDay;
	}
	
	
public void setYear (int presentYear)               
	{
		this.presentYear =  presentYear ;
	}
	
public void setMonth (int presentMonth)             
	{
		this.presentMonth = presentMonth ;
	}
	
public void setDay (int presentDay)                 
	{
		this.presentDay =  presentDay ;
	}
	
	
@Override
public String toString ()                       
	{
		return presentMonth + "/" + presentDay + "/" + presentYear ;
	}
	
public void addDays(int inc)
	{
			int days=inc;
	        int maxDays=monthData[presentMonth-1];
	        int index ;
		
	    if((maxDays-presentDay)>=inc)
            {
                presentDay=presentDay+inc ;
            }
        else
            {
                days=days-(maxDays-presentDay) ;
                while(days>0)
                {
                    index=presentMonth-1;
                    if(index<=11)
                    {
                        if(index==11)
                        {
                            presentMonth=1 ;
                            presentYear=presentYear+1 ;
                        }
                        else
                            presentMonth=presentMonth+1;
                    }
                    maxDays=monthData[presentMonth-1] ;
                    presentDay=0 ;
                    if(days<=maxDays)
                    {
                        presentDay=days;
                        days=0 ;
                    }
                    else
                    {
                        days=days-maxDays ;
                    }
                }
            }                    
	}
	
	
	
}