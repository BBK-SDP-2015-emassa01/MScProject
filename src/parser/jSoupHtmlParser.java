package parser;

	
	import java.io.IOException;
	 

	import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;
	 
	public class jSoupHtmlParser {
	 
	  public static void main(String[] args) {
	 
		Document doc;
		try {
	 
			String[] searchPages = {"http://www.google.com", "https://uk.search.yahoo.com", "https://www.bing.com"};
			
			for (String s: searchPages){
			// need http protocol
			doc = Jsoup.connect(s).get();
	 
			// get page title
			String title = doc.title();
			System.out.println("\ntitle : " + title);
	 
			// get all links
			Elements links = doc.select("a[href]");
			for (Element link : links) {
	 
				// get the value from href attribute
				System.out.println("\nlink : " + link.attr("href"));
				System.out.println("text : " + link.text());
	 
			}
			}
	 
		} catch (IOException e) {
			e.printStackTrace();
		}
	 
	  }
	 
	}

