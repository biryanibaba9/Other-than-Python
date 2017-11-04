public class MonthInfo
{
	int mdMonth;
	int no_of_days;
	
	public MonthInfo()
	{
		this.mdMonth = 0;
		this.no_of_days = 0;
	}
	
	public MonthInfo(int mdMonth, int no_of_days)
	{
		this.mdMonth = mdMonth;
		this.no_of_days = no_of_days;
	}

	public int getMonth()
	{
		 return this.mdMonth;
	}
	
	public int getNoDays()
	{
		return this.no_of_days;
	}
	
	public void setMonth(int mdMonth)
	{
		this.mdMonth = mdMonth;
	}
	
	public void setNoDays(int no_of_days)
	{
		this.no_of_days = no_of_days;
	}
	
	public String print()
	{
		return mdMonth + " month has " + no_of_days + " days.";
	}
}
	