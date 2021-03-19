<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/archive/sidebar.php"; ?>

<meta abacus-link='H' />

<script type="text/template" id="description-template">
    <h1 id="page" page="encryption">Encryption</h1>
    <div>
        <p>The Four Amigos helped Cassley with her research and have departed the hustle and bustle of Beijing, China and
            arrived in Milan, Italy.</p>

        <p>Lemme has learned from his little mishap in India and is now always concerned for the groups' overall
            cyber security. He takes as many precautions as he can when it comes to his safety on the internet. That
            behavior
            and level of paranoia have rubbed off on the other group members, especially Syrin.</p>

        <h3>Problem Description</h3>

        <p>Syrin is enjoying her favorite drink at Milan's most famous coffee shop, Steerbucks. She is sending text messages
            over Steerbucks’ public network when she realizes her messaging client does not automatically encrypt her texts.
            She notices Patrick, a sketchy man, sitting in the corner. While she is concerned, she doesn't know he is a
            malicious hacker and is examining Steerbucks’ network traffic. Syrin is rightfully paranoid about sending
            unencrypted messages over the public network, so she devises the following encryption scheme: </p>

        <p>First, the spaces are removed from the text. Let N be the length of this text.
            Then, characters are written into a grid, whose rows and columns have the following constraints
            (<strong>a</strong> and <strong>b</strong>):</p>

        <h4>a) &#8970;&#8730;(N)&#8971; &#8804; rows &#8804; columns
            &#8968;&#8730;(N)&#8969;</h4>

        <p>Where &#8970;x&#8971; is the floor of x, representing the greatest integer less than or equal to x
            And &#8968;x&#8969; is the ceiling of x, representing the least integer greater than or equal to x</p>

        <p>and:</p>

        <h4>b) rows &#215; columns &#8805; N</h4>

        <p>Finally, after creating this grid, the encrypted string is generated by traversing down the columns of the grid,
            with a space between each new column.</p>

        <h5>Example</h5>

        <p>Consider the input text:
            <em>i am really enjoying my time at steerbucks this fine wednesday morning</em></p>

        <p>After removing spaces, the text is 59 characters long. &#8730;(59) is between 7 and 8, so it is written in the
            form of a grid with 7 rows and 8 columns.</p>

        <pre>
iamreall 
yenjoyin
gmytimea
tsteerbu
cksthisf
inewedne
sdaymorn
ing
        </pre>

        <p>The final encrypted string is then created from the columns of the grid:
            <em>iygtcisi aemskndn mnytseag rjtetwy eoiehem aymrido liebsnr lnaufen</em></p>

        <p>To solve this problem, <strong>implement this encryption scheme.</strong></p>
    </div>
    <div>
        <h2>Writing Your Solution</h2>
        <p>Enter your solution in the body of this method in the given code skeleton.</p>

        <h3>Method Signature</h3>

        <h4>Java</h4>
        <pre class="prettyprint">public static String encrypt(String s)</pre>

        <h4>Python</h4>
        <pre class="prettyprint">def encrypt(s):```</pre>

        <h3>Sample Method Calls</h3>
        <p><code>encrypt("my name is sam")</code> returns <code>"mms yea nim as"</code></p>
    </div>
    <h2>Testing Your Program from the Console</h2>

    <h3>Console Input Format</h3>
    <ul>
        <li>the first line contains <code>t</code>, the number of tests</li>
        <li>for each test, a single line contains the input string, <code>s</code></li>
    </ul>

    <h3>Assumptions</h3>
    <ul>
        <li>1 &le; <code>t</code> &le; 10</li>
        <li>1 &le; length of <code>s</code> &lt; 100 characters</li>
        <li><code>s</code> will not contain any spaces</li>
    </ul>

    <h3>Console Output Format</h3>
    <ul>
        <li>for each test, a single line with the encrypted string</li>
    </ul>

    <div>
        <h3>Sample Run</h3>

        <h4>Input:</h4>
        <pre>
2
iamreallyenjoyingmytimeatsteerbucksthisfinewednesdaymorning
mynameissam
        </pre>

        <h4>Output:</h4>
        <pre>
iygtcisi aemskndn mnytseag rjtetwy eoiehem aymrido liebsnr lnaufen
mms yea nim as
        </pre>
        <br />
        <br />
    </div>
</script>

<script type="text/template" id="python-skeleton-template">
    <pre class="prettyprint">
def encrypt(s):
    """
    TODO: Implement the "square encryption" scheme

    Parameters:
    s --> the message to encrypt, of type String
    
    Returns:
    s --> the encrypted message
    """

    return s

# It is unnecessary to edit the "main" method of each problem's provided code skeleton.
# The main method is written for you in order to help you conform to input and output formatting requirements.
def main():
    for _ in range(int(input())):
        print("".join(encrypt(input())))
main()
    </pre>
</script>

<script type="text/template" id="java-skeleton-template">
    <pre class="prettyprint">
import java.util.Scanner;

public class Encryption {


    /* It is unnecessary to edit the "main" method of each problem's provided code skeleton.
        * The main method is written for you in order to help you conform to input and output formatting requirements.
        */	
    public static void main(String[] args) throws Exception {
        Scanner in = new Scanner(System.in);
        int cases = in.nextInt();
        for(;cases > 0; cases--)
            System.out.println(encode(in.next()));
        in.close();
    }
    
    /* TODO: Implement the "square encryption" scheme 
        * @param s, the message to encrypt, of type String 
        * @return s, the encrypted message
        */ 
    private static String encode(String s) {
        return s;
    }
}
    </pre>
</script>