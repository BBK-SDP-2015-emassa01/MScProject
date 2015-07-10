package parser;

	
	import java.io.IOException;
	 


import java.util.Scanner;

	import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;
	 
	public class jSoupHtmlParser {
	 
	  public static void main(String[] args) {
		  System.out.println("Type your search query");
		  
		  //String query = new Scanner(System.in).nextLine();
		  
		  String query = "Esha Massand";
		  
		  System.out.println("Running jSoupHtmlParser");
		Document doc;
		try {
	 
			String[] searchPages = {"http://www.google.com/search?#q=", "https://uk.search.yahoo.com/search?p=", "https://www.bing.com/search?q="};
			
			for (String searchPage: searchPages){
			String tempSearch = searchPage + query;
				
			// need http protocol
			doc = Jsoup.connect("http://google.com").get();
	 
			// get page title
			String title = doc.title();
			System.out.println("\ntitle : " + title);
	 
			// get all links
			Elements links = doc.select("a[href]");
			for (Element link : links) {
	 
				// get the value from href attribute
				System.out.println("text : " + Jsoup.parse(tempSearch).body().text());
				System.out.println("\nlinkHref : " + link.attr("href"));
				System.out.println("linkText : " + link.text());
				//System.out.println("tag : " + link.tag());
				//System.out.println("tagName : " + link.tagName());
				//System.out.println("val : " + link.val());
				 
			}
			}
	 
		} catch (IOException e) {
			e.printStackTrace();
		}
	 
	  }
	 
	}

