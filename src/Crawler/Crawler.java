package Crawler;
import java.net.URL;
import java.util.concurrent.Callable;

/**
 * Created with IntelliJ IDEA.
 * User: liliya
 * Date: 10/03/14
 * Time: 19:18
 * To change this template use File | Settings | File Templates.
 */
public class Crawler implements Callable<WebPage> {

    URL pageScanned;

    public Crawler(URL address){
           this.pageScanned=address;
    }

       @Override
    public WebPage call() throws Exception {

           WebPage webpage=new WebPageImpl(pageScanned);
           webpage.scanForEmails();
           webpage.scanForWebpages();

           return webpage;
    }
}
