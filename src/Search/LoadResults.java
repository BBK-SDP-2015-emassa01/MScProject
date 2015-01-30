package Search;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class LoadResults {
	
	public static void main(String[] args) throws Exception {
		
		//REF: http://stackoverflow.com/questions/10257276/java-code-for-using-google-custom-search-api

	    String key="AIzaSyAfj4MY2Z6Oqur_DWdI83coqtrgrqQhDW8";
	    String qry="MrinalSeth";
	    URL url = new URL(
	            "https://www.googleapis.com/customsearch/v1?key="+key+ "&cx=013036536707430787589:_pqjad5hr1a&q="+ qry + "&alt=json");
	    HttpURLConnection conn = (HttpURLConnection) url.openConnection();
	    conn.setRequestMethod("GET");
	    conn.setRequestProperty("Accept", "application/json");
	    BufferedReader br = new BufferedReader(new InputStreamReader(
	            (conn.getInputStream())));

	    String output;
	    System.out.println("Output from Server .... \n");
	    while ((output = br.readLine()) != null) {
	    	
//	    	System.out.println("\tOUTPUT : "+output);

	        if(output.contains("\"link\": \"")){                
	            String link=output.substring(output.indexOf("\"link\": \"")+("\"link\": \"").length(), output.indexOf("\","));
//	        System.out.println("outputsubstring(output.indexOf(link)):"+output.indexOf("\"link\": \""));
//	        System.out.println("link: " + output.indexOf("\"link\": \"" ));
//	        System.out.println("link: " + output.indexOf("\","));
	    	System.out.println(link);       //Will print the google search links
	        }     
	    }
	    conn.disconnect();                              
	}

}
