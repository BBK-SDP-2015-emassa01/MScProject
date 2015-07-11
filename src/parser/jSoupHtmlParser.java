package parser;

	
	import java.io.IOException;
	 


import java.net.URLEncoder;
import java.util.Scanner;

	import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;
	 
	public class jSoupHtmlParser {
	 
	  public static void main(String[] args) {
		  System.out.println("Type your search query");
		  
		  //String query = new Scanner(System.in).nextLine();
		  
		  //yahoo = "esha+massand"
		  String query = "esha+massand";
		  
		  System.out.println("Running jSoupHtmlParser");
		Document doc;
		try {
	 
			//String[] searchPages = {"https://www.google.co.uk/search?#q=", "https://uk.search.yahoo.com/search?p=", "https://www.bing.com/search?q="};
			String[] searchPages = {"https://www.google.co.uk/search?#q="};
			for (String searchPage: searchPages){
			String tempSearch = searchPage + query;

			// need http protocol
			doc = Jsoup.connect(tempSearch).get();
	 
			//System.out.println(doc);
			// get page title
			String title = doc.title();
			System.out.println("\ntitle : " + title);
	 
			//test
			
			//Element elementByID = doc.getElementById("rcnt");
			//System.out.println("elementByID: "+elementByID);
			
//			for (Element link : linkList) {
//				  String linkHref = link.attr("href");
//				  String linkText = link.text();
//				  System.out.println("linkHref: "+linkHref);
//				  System.out.println( "linkText: "+linkText);
//				}
			
			
//			Element body = doc.body();
//			System.out.println("body:" + body);
			
			//yahoo = "h3.title > a"
			//bing = "h2 a"
			
			// get all links
			//Elements links = Jsoup.connect(searchPage + URLEncoder.encode(query, "UTF-8")).userAgent("xxx").get().select("li.g>h3>a");
			Elements links = doc.select("a[href]");
			System.out.println("length of links: " + links.size());
			for (Element link : links) {
	 
				// get the value from href attribute
				System.out.println("\ntext : " + Jsoup.parse(tempSearch).body().text());
				System.out.println("linkHref : " + link.attr("href"));
				System.out.println("linkText : " + link.text());
				System.out.println("hasClass : " + link.hasClass("r"));
				System.out.println( "absHref: "+  link.attr("abs:href")); 
				//System.out.println("html : " + link.html());
				//System.out.println("tag : " + link.tag());
				System.out.println("tagName : " + link.tagName());
				//System.out.println("val : " + link.val());
				 
			}
			}
	 
		} catch (IOException e) {
			e.printStackTrace();
		}
	 
	  }
	 
	}

