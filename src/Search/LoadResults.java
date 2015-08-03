package Search;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

/*
 * This class was built using the Google Custom Search API which does not currently search 'Google' but only custom pages entered
 * by the user. 
 * Will return to the Google Custom Search after parameters have been finalised to get the business edition of Custom Search 
 * to query Google.com.
 */
public class LoadResults {
	
	public static void main(String[] args) throws Exception {
		
		//REF: http://stackoverflow.com/questions/10257276/java-code-for-using-google-custom-search-api
		// for key https://console.developers.google.com/project/246574547152/apiui/credential
	    String key="AIzaSyDbF1Bflr2i3O61xEcXcRYG6-7knAOmxIU";
	    String qry="EshaMassand";
	    // for ID https://cse.google.com/cse/setup/basic?cx=008818185974073145685:ga_fmgk9gf0
	    String cx = "008818185974073145685:ga_fmgk9gf0";
	    URL url = null;
	    try{
	    url = new URL(
	            "https://www.googleapis.com/customsearch/v1?key="+key+"&cx=" + cx + "&q=" + qry + "&alt=json");
	    //https://www.google.co.uk/?#q=hello -- it's in the cite tab
	    //https://uk.search.yahoo.com/search;?p=hello -- it;s n the <a id = "link-1" or 'span'
	    }catch (Exception  e){
	    	e.getMessage();
	    }
	    
	    //GET https://www.googleapis.com/customsearch/v1?key=INSERT_YOUR_API_KEY&cx=017576662512468239146:omuauf_lfve&q=lectures
	    //https://www.googleapis.com/customsearch/v1?key= INSERT_YOUR_API_KEY &cx=017576662512468239146:omuauf_lfve&q=lectures
	    HttpURLConnection conn = (HttpURLConnection) url.openConnection();
	    conn.setRequestMethod("GET");
	    conn.setRequestProperty("Accept", "application/json");
	    BufferedReader br = new BufferedReader(new InputStreamReader(
	            (conn.getInputStream())));

	    String output;
	    System.out.println("Output from Server .... \n");
	    while ((output = br.readLine()) != null) {
	    	
	    	System.out.println("\tOUTPUT : "+output);

	        if(output.contains("\"link\": \"")){                
	            String link=output.substring(output.indexOf("\"link\": \"")+("\"link\": \"").length(), output.indexOf("\","));
	        System.out.println("outputsubstring(output.indexOf(link)):"+output.indexOf("\"link\": \""));
	        System.out.println("link: " + output.indexOf("\"link\": \"" ));
	        System.out.println("link: " + output.indexOf("\","));
	    	System.out.println(link);       //Will print the google search links
	        }     
	    }
	    conn.disconnect();                              
	}

}
