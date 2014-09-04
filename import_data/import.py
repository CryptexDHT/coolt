from pyquery import PyQuery as pq
from lxml import etree
import urllib
from lxml.html import HTMLParser, fromstring
UTF8_PARSER = HTMLParser(encoding='utf-8')


# d = pq(url='https://2ch.hk/', headers={'user-agent' : """Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)"""}) 
f = open("./catalog.html", "rb")

d = pq(f.read().decode('utf-8'))

f.close()


index = 0
with open("record.php", "w") as outfile:
    outfile.write("""DB::table('links')->insert(array(\n""")
    

    for column in d('.blcolumn'):
        el = pq(column)
        title = el('b').text()
        print title.encode('utf8')
        links = el('a')
        
        outfile.write("""\narray( 'short' => '', 'title' => '%s', 'parent' => '' ),""" % (title.encode('utf8') ))
        outfile.write("""\n/*****************************************************************************/\n""" )

        for link in links:
            link = pq(link)

            href = link.attr('href')
            title = link.text()

            print href, title.encode('utf8')
            outfile.write("""\narray( 'short' => '%s', 'title' => '%s', 'parent' => '%s' ),""" % ( href.encode('utf8').replace('/', ''), title.encode('utf8'), index ))



        index = index + 1
        print "================================"
    outfile.write("""\n));""")

