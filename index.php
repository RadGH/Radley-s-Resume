<?php
function return_base64_url( $image ) {
	$mime = mime_content_type( $image );
	
	return 'data: ' . ( function_exists( 'mime_content_type' ) ? mime_content_type( $image ) : $mime ) . ';base64,' . base64_encode( file_get_contents( $image ) );
	
}
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Resume &ndash; Radley Sustaire, WordPress Developer</title>
	
	<?php if ( isset( $_REQUEST['rad'] ) ) { ?>
		<link rel="stylesheet" href="style.css">
	<?php }else{ ?>
		<style type="text/css">
			<?php include('style.min.css'); ?>
		</style>
	<?php } ?>
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ff6600">
	
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Radley Sustaire's Resume" />
	<meta property="og:description" content="A resume for Radley's experiences as a WordPress developer." />
	<meta property="og:url" content="https://radleysustaire.com/resume/" />
	<meta property="og:site_name" content="Radley Sustaire" />
	<meta property="article:publisher" content="https://www.facebook.com/radgh" />
	<meta property="og:image" content="https://radleysustaire.com/resume/rs-circle.png" />
</head>
<body>

<div class="site">
	
	<div class="header">
		
		<div class="primary">
			
			<div class="name">
				<h1>Resume &ndash; Radley Sustaire
					<small>WordPress Developer</small>
				</h1>
			</div>
		
		</div>
		
		<div class="secondary"></div>
	
	</div>
	
	<div class="body">
		
		<div class="secondary">
			
			<div class="contact secondary-section">
				<h4 class="section-title">Personal Info</h4>
				
				<div class="content">
					<ul class="contact-methods">
						<li class="tel"><span class="prefix">Phone</span> <a href="tel:+15415138145" target="_blank">+1 (541) 513-8145</a></li>
						<li class="email"><span class="prefix">Email</span> <a href="mailto:radleygh@gmail.com" target="_blank">radleygh@gmail.com</a></li>
						<li class="skype"><span class="prefix">Skype</span> <span class="skype-name">radleygh</span></li>
						<li class="website"><span class="prefix">Website</span> <a href="https://radleysustaire.com/" target="_blank">radleysustaire.com</a></li>
						<li class="linkedin"><span class="prefix">LinkedIn</span>
							<a href="https://www.linkedin.com/in/radley-sustaire" target="_blank">linkedin.com/in/radley-sustaire</a></li>
						<li class="github"><span class="prefix">Github</span> <a href="https://github.com/RadGH/" target="_blank">github.com/RadGH</a></li>
						<li class="location"><span class="prefix">Location</span>
							<a href="https://www.google.com/maps/place/Corvallis,+OR/@44.562951,-123.3535763,12z" target="_blank">Corvallis, OR</a></li>
					</ul>
				</div>
			</div>
			
			<div class="technical-skills secondary-section">
				
				<h4 class="section-title">Technical Skills</h4>
				
				<div class="content">
					<ul class="skill-list">
						<li>HTML/CSS <span class="duration">12 Years</span></li>
						<li>PHP <span class="duration">11 Years</span></li>
						<li>MySQL <span class="duration">11 Years</span></li>
						<li>JavaScript <span class="duration">9 Years</span></li>
						<li>WordPress <span class="duration">7 Years</span></li>
						<li>Git <span class="duration">5 Years</span></li>
					</ul>
				</div>
			
			</div>
			
			<div class="general-skills secondary-section">
				
				<h4 class="section-title">Other Skills</h4>
				
				<div class="content">
					<ul class="skill-list">
						<li>Photoshop <span class="duration">8 Years</span></li>
						<li>IT/Tech Support <span class="duration">6 Years</span></li>
						<li>Team Leader <span class="duration">4 Years</span></li>
						<li>Project Management <span class="duration">3 Years</span></li>
						<li>Illustrator <span class="duration">2 Years</span></li>
					</ul>
				</div>
			
			</div>
			
			<div class="hobbies secondary-section">
				
				<h4 class="section-title">Hobbies</h4>
				
				<div class="content">
					<ul class="skill-list">
						<li>Cycling</li>
						<li>Camping and Hiking</li>
						<li>VR &amp; PC Gaming</li>
					</ul>
				</div>
			
			</div>
		
		</div>
		
		<div class="primary">
			
			<div class="intro primary-section">
				<h3 class="section-title">Introduction</h3>
				
				<div class="content">
					<p>Hey there, I'm Radley! I'm currently building custom WordPress websites and solving
					   technical support tickets for <a href="https://alchemyandaim.com/" target="_blank" rel="external">Alchemy + Aim</a>. I have more than 12 years of experience
					   with web development and specialize exclusively with WordPress. I also own a business
					   named <a href="https://zingmap.com/" target="_blank" rel="external">ZingMap</a> where I provide managed WordPress hosting, development and maintenance
					   services.</p>
					
					<p>If you want to discuss a project or opportunity with me, <a href="mailto:radleygh@gmail.com">send me an email</a>. Thank you!</p>
				</div>
			</div>
			
			<div class="employment primary-section">
				<h3 class="section-title">Employment</h3>
				
				<div class="content">
					
					<div class="sq-ordered-list">
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">September 2017 &mdash; Current</div>
								<h3>Alchemy + Aim</h3>
								<h4>Front-End Developer and Support Specialist</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Complete custom WordPress builds from a design PSD.</li>
									<li>Coordinating with team members, designers and clients.</li>
									<li>Offering customer support through an email ticketing system, and occasional phone/online meetings.</li>
								</ul>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">July 2017 &mdash; Current</div>
								<h3>Zingmap, LLC</h3>
								<h4>Owner</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Web development, hosting, and related services.</li>
									<li>Developing websites with custom themes, custom plugins, analytics, SEO, and so on.</li>
								</ul>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">April 2017 &mdash; Current</div>
								<h3>WordPress Developer</h3>
								<h4>Self-Employed</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Sourcing clients, discussing needs, writing estimates and proposals.</li>
									<li>Developing websites including custom WordPress themes and plugins.</li>
								</ul>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">2012 &mdash; 2017</div>
								<h3>Lead Developer</h3>
								<h4>Limelight Department, Inc.</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Coached and led a team of in-house and remote developers.</li>
									<li>Delegated projects to other developers based on skill levels and workload.</li>
									<li>Maintained 5 separate web servers, containing more than 80 active websites.</li>
									<li>Built, tested, and deployed various completed websites with custom themes and plugins.</li>
									<li>Optimized two different websites each with over 1+ million monthly visitors, improving stability and loading speed immensely.</li>
								</ul>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">2016</div>
								<h3>Freelance WordPress Developer</h3>
								<h4>Bridge Town Home Buyers, LLC</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Rebuilt website using WordPress, reevaluated and modified all pages for improved usability and SEO.</li>
									<li>Custom WordPress plugin for a listing of properties.</li>
								</ul>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">2015</div>
								<h3>Freelance WordPress Developer</h3>
								<h4>CaseSwap</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Built a custom WordPress plugin with membership integration allowing paid users to be notified of case submissions.</li>
									<li>Integrated contact forms with membership system, notifying users based on their city/state.</li>
									<li>Set up Mandrill to distribute emails from the plugin's notifications.</li>
								</ul>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">2011 &mdash; 2015</div>
								<h3>Web Developer</h3>
								<h4>Goliath Creative</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Built a horizontal scrolling restaurant website, with strict browser support requirements.</li>
									<li>Created numerous website templates from PSD's and PDF's, for use in a custom made CMS.</li>
									<li>Added mobile version of websites using jQuery Mobile, and later using responsive design techniques.</li>
								</ul>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">2007 &mdash; 2011</div>
								<h3>Web Developer / IT / Software Developer</h3>
								<h4>oDesk &ndash; Various Clients</h4>
							</div>
							
							<div class="sq-list-content">
								<ul>
									<li>Worked with a variety of clients on many web development projects, big and small.</li>
									<li>Performed IT work, including Windows tutoring and building automation software.</li>
								</ul>
							</div>
						</div>
					
					</div>
				
				</div>
			</div>
			
			
			<div class="testimonials primary-section">
				<h3 class="section-title">Testimonials</h3>
				
				<div class="testimonial-content"><p>To respect the privacy of my references, contact information is only available upon request.</p></div>
				
				<div class="content">
					
					<div class="testimonial-list">
						
						<div class="testimonial-item">
							
							<div class="testimonial-image"><img src="<?php echo return_base64_url( 'images/testimonials/erik-contzius.jpg' ); ?>" alt="Erik Contzius"></div>
							
							<div class="testimonial-content">
								<p>
									<span class="quote quote-open">&ldquo;</span>Radley embodies the best of a partner in development. He really knows his way around databases, WordPress, and has a good design sense to boot. Radley intuits solutions to problems, both anticipated and unexpected. He is patient and more than willing to debug problems that arise. His communication skills are excellent. I will hire Radley again most assuredly!<span class="quote quote-close">&rdquo;</span>
								</p>
								
								<h3><span class="quote">&mdash;</span> <strong>Erik Contzius</strong>, Women Cantors’ Network</h3>
							</div>
						
						</div>
						
						<div class="testimonial-item">
							
							<div class="testimonial-image"><img src="<?php echo return_base64_url( 'images/testimonials/jamie-stephens.jpg' ); ?>" alt="Jamie Stephens"></div>
							
							<div class="testimonial-content">
								<p>
									<span class="quote quote-open">&ldquo;</span>Radley took my ideas and ran with them -- the end result is a solution that does more than I originally planned and I couldn't be more thrilled! He was prompt in replying to my messages and I was provided with detailed updates along the way. If you're looking for a developer, Radley really knows his stuff. Stop scrolling and send him a message now, you won't regret it. Thank you Radley!<span class="quote quote-close">&rdquo;</span>
								</p>
								
								<h3><span class="quote">&mdash;</span> <strong>Jamie Stephens</strong>, Brantford Experts</h3>
							</div>
						
						</div>
						
						<div class="testimonial-item">
							
							<div class="testimonial-image"><img src="<?php echo return_base64_url( 'images/testimonials/jeff-h.jpg' ); ?>" alt="Jeff H."></div>
							
							<div class="testimonial-content">
								<p>
									<span class="quote quote-open">&ldquo;</span>Radley is an absolute pleasure to work with. He's professional, organized, and efficient. The thing I looked most about working with him is his communication. He explains things thoroughly and succinctly. He's an all-around outstanding contractor.<span class="quote quote-close">&rdquo;</span>
								</p>
								
								<h3><span class="quote">&mdash;</span> <strong>Jeff H.</strong></h3>
							</div>
						
						</div>
						
						<div class="testimonial-item">
							
							<div class="testimonial-image"><img src="<?php echo return_base64_url( 'images/testimonials/joey-curtin.jpg' ); ?>" alt="Joey Curtin"></div>
							
							<div class="testimonial-content">
								<p>
									<span class="quote quote-open">&ldquo;</span>Radley rescued SPOT's sorely neglected and out of date website and transformed it into a wonderful new public face in an amazingly short time! He added video, streamlined every section of the site and added a much needed on-line application option for our clients. His excellent suggestions and creative genius throughout the site have increased our traffic and accessibility tremendously. He is extremely professional and pleasant to work with (really listening carefully and patiently explaining all the steps he was taking to our team of non-techies). We will definitely use his services again and would highly recommend his technical talent and business acumen!<span class="quote quote-close">&rdquo;</span>
								</p>
								
								<h3><span class="quote">&mdash;</span> <strong>Joey Curtin</strong>, Stop Pet Overpopulation Today</h3>
							</div>
						
						</div>
						
						<div class="testimonial-item">
							
							<div class="testimonial-image"><img src="<?php echo return_base64_url( 'images/testimonials/shannon-mcalister.jpg' ); ?>" alt="Shannon McAlister"></div>
							
							<div class="testimonial-content">
								<p>
									<span class="quote quote-open">&ldquo;</span>Radley did a great job! He installed a new WP theme, added a working contact form and cleaned up the backend including updating and adding necessary plugins. He was super timely, communicative, and easy to work with.<span class="quote quote-close">&rdquo;</span>
								</p>
								
								<h3><span class="quote">&mdash;</span> <strong>Shannon McAlister</strong>, PDX Homeowners</h3>
							</div>
						
						</div>
						
						<div class="testimonial-item">
							
							<div class="testimonial-image"><img src="<?php echo return_base64_url( 'images/testimonials/zack-p-min.jpeg' ); ?>" alt="Zack P."></div>
							
							<div class="testimonial-content">
								<p>
									<span class="quote quote-open">&ldquo;</span>I worked with Radley for about five years in the agency world. My business partner and I hired Radley when he was a brand-new developer; inexperienced, but bright, eager, and motivated. In a very short amount of time, Radley grew into a brilliant developer and became our agency's lead developer. He and I worked in-tandem on dozens of websites over the years. He has qualities that are vital to successful programming. Firstly, he takes great personal pride in his work. His personal expectations of quality exceed that of those around him, and that makes his work superb. Radley is also a creative problem solver. We often joked that "if a client can dream it, Radley can build it". And finally, Radley's greatest luxury is his ability to articulate complex concepts both in "programmer-speak", and layman's terms. I've had Radley write summaries for clients, where his layman's term verbiage is so eloquent that I just copy and paste it to my client. For those of you familiar with web developers, you know this is extremely rare. He's the ultimate 5-tool player, and you should certainly hire him.<span class="quote quote-close">&rdquo;</span>
								</p>
								
								<h3><span class="quote">&mdash;</span> <strong>Zack P.</strong></h3>
							</div>
						
						</div>
					
					</div>
				
				</div>
			</div>
			
			<div class="open-source primary-section">
				<h3 class="section-title">Open-source Plugins</h3>
				
				<div class="content">
					
					<div class="sq-ordered-list">
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">May 2018</div>
								<h3>RS Next and Previous Posts</h3>
								<h4><a href="https://github.com/RadGH/RS-Next-Previous-Posts" target="_blank">github.com/RadGH/RS-Next-Previous-Posts</a></h4>
							</div>
							
							<div class="sq-list-content">
								<p>Enhance your blog by adding Next and Previous Post links below your articles. This plugin displays a featured image
								   in addition to the post title and excerpt.</p>
							</div>
							
							<div class="sq-list-image">
								<img src="<?php echo return_base64_url( 'images/plugins/rs-next-previous-posts.png' ); ?>" alt="Next and Previous Posts plugin in action">
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">April 2018</div>
								<h3>RS Simplified Gravity Forms Styles</h3>
								<h4><a href="https://github.com/RadGH/RS-Simplified-Gravityforms-Styles" target="_blank">github.com/RadGH/RS-Simplified-Gravityforms-Styles</a></h4>
							</div>
							
							<div class="sq-list-content">
								<p>Replaces the default Gravity Forms stylesheets with simpler, easy-to-override stylesheets (NO !important rules).
								   A list of elements with generic colors is available to easily match the branding of your website.</p>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">February 2018</div>
								<h3>Auto Fill Alt Tags</h3>
								<h4><a href="https://github.com/RadGH/Auto-Fill-Alt-Tags" target="_blank">github.com/RadGH/Auto-Fill-Alt-Tags</a></h4>
							</div>
							
							<div class="sq-list-content">
								<p>Automatically fills in alt tags for your images in the post content. Preserves existing alt text if it exists. If
								   alt text is not entered for an attachment, the caption or title will be used instead. No configuration necessary.</p>
							</div>
							
							<div class="sq-list-image">
								<img src="<?php echo return_base64_url( 'images/plugins/autofill-alt-tags.png' ); ?>" alt="Image tags with before and after, showing that alt tags have been filled in.">
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">May 2017</div>
								<h3>RS WooCommerce Brands</h3>
								<h4><a href="https://github.com/RadGH/RS-WooCommerce-Brands" target="_blank">github.com/RadGH/RS-WooCommerce-Brands</a></h4>
							</div>
							
							<div class="sq-list-content">
								<p>This WordPress plugin adds a new "Brands" taxonomy to WooCommerce products. This also includes a widget to filter
								   brands for use in your store's sidebar, and some utility functions to use brands in other situations.</p>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">Mar 2016</div>
								<h3>WooCommerce Virtualized Variations</h3>
								<h4><a href="https://github.com/RadGH/WooCommerce-Virtualized-Variations" target="_blank">github.com/RadGH/WooCommerce-Virtualized-Variations</a>
								</h4>
							</div>
							
							<div class="sq-list-content">
								<p>This plugin for WooCommerce allows products to be customized with different options. Each option adjusts the original price of the product, eliminating the need
								   for variations to be created for every possible combination of features.</p>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">Feb 2016</div>
								<h3>WooCommerce Flickity Gallery</h3>
								<h4><a href="https://github.com/RadGH/WooCommerce-Flickity-Gallery" target="_blank">github.com/RadGH/WooCommerce-Flickity-Gallery</a></h4>
							</div>
							
							<div class="sq-list-content">
								<p>Turn your WooCommerce featured image and gallery photos into an interactive image carousel using
									<a href="https://flickity.metafizzy.co/" target="_blank">Flickty</a>.</p>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">Feb 2016</div>
								<h3>Noindex Pages</h3>
								<h4><a href="https://wordpress.org/images/plugins/noindex-pages/" target="_blank">wordpress.org/images/plugins/noindex-pages</a></h4>
								<div class="stars">
									<a href="https://wordpress.org/support/plugin/noindex-pages/reviews/" target="_blank" title="Read all reviews"><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span></a>
								</div>
							</div>
							
							<div class="sq-list-content">
								<p>This plugin is available on the WordPress plugin directory. It offers a simple checkbox to mark pages as "Hidden from search engines".</p>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">Feb 2015</div>
								<h3>ACF Avatar</h3>
								<h4><a href="https://github.com/RadGH/ACF-Avatar" target="_blank">github.com/RadGH/ACF-Avatar</a></h4>
							</div>
							
							<div class="sq-list-content">
								<p>Upload your own avatar using Advanced Custom Fields, allowing you to replace the default avatar from Gravatar (or whatever avatar source you choose).</p>
							</div>
						</div>
						
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="date">Jan 2015</div>
								<h3>WordPress Popular Posts &ndash; Tabbed Widget</h3>
								<h4>
									<a href="https://github.com/RadGH/WordPress-Popular-Posts---Tabbed-Widget" target="_blank">github.com/RadGH/WordPress-Popular-Posts---Tabbed-Widget</a>
								</h4>
							</div>
							
							<div class="sq-list-content">
								<p>This extension for
									<a href="https://wordpress.org/images/plugins/wordpress-popular-posts/" target="_blank">WordPress Popular Posts</a> displays three tabs, for Daily,
								   Weekly and All Time statistics.</p>
							</div>
						</div>
					
					</div>
				
				</div>
			</div>
			
			<div class="websites primary-section">
				<h3 class="section-title">Featured Websites</h3>
				<div class="content">
					<div class="sq-numeric-list">
						<div class="sq-list-item">
							<div class="sq-list-website-thumb">
								<a href="images/websites/src/peg-rodrigues.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/peg-rodrigues.png' ); ?>" alt="Screen capture of PegRodrigues.com"></a>
							</div>
							<div class="sq-list-header">
								<h3>Peg Rodrigues</h3>
								<h4><a href="https://pegrodrigues.com/" target="_blank">pegrodrigues.com</a></h4>
							</div>
							<div class="sq-list-content">
								<p><em>Built for <a href="https://alchemyandaim.com/" target="_blank">Alchemy + Aim</a>, designed by
										<a href="https://rachelpesso.com/" target="_blank">Rachel Pesso</a>.</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-website-thumb">
								<a href="images/websites/src/kruggsmash.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/kruggsmash.png' ); ?>" alt="Screen capture of Kruggsmash.com"></a>
							</div>
							<div class="sq-list-header">
								<h3>Kruggsmash</h3>
								<h4><a href="https://kruggsmash.com/" target="_blank">kruggsmash.com</a></h4>
							</div>
							<div class="sq-list-content">
								<p>This website was donated to Kruggsmash. He's one of my favorite YouTubers and makes excellent Dwarf Fortress videos.</p>
								<p><em>Built and designed by Radley, for Adam (Kruggsmash).</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-website-thumb">
								<a href="images/websites/src/tracy-omalley.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/tracy-omalley.png' ); ?>" alt="Screen capture of TracyOMalley.com"></a>
							</div>
							<div class="sq-list-header">
								<h3>Tracy O'Malley</h3>
								<h4><a href="http://tracyomalley.com/" target="_blank">tracyomalley.com</a></h4>
							</div>
							<div class="sq-list-content">
								<p><em>Built for <a href="https://alchemyandaim.com/" target="_blank">Alchemy + Aim</a>, designed by
										<a href="https://rachelpesso.com/" target="_blank">Rachel Pesso</a>.</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="sq-list-website-thumb">
									<a href="images/websites/src/willamalane.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/willamalane.png' ); ?>" alt="Screen capture of Willamane.org"></a>
								</div>
								<h3>Willamalane Parks &amp; Recreation District</h3>
								<h4><a href="http://willamalane.org/" target="_blank">willamalane.org</a></h4>
							</div>
							<div class="sq-list-content">
								<p>Custom map locators for Parks, Facilities, and Bird trails. Custom post type for taking classes. Advanced navigation and mobile menus. ADA Section 503c Compliance.</p>
								<p><em>Built for Limelight Department</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="sq-list-website-thumb">
									<a href="images/websites/src/gorilla-capital.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/gorilla-capital.png' ); ?>" alt="Screen capture of GorillaCapital.com"></a>
								</div>
								<h3>Gorilla Capital</h3>
								<h4><a href="https://gorillacapital.com/" target="_blank">gorillacapital.com</a></h4>
							</div>
							<div class="sq-list-content">
								<p>Custom built property locator, Custom advanced search tool, Custom Fix + Flip Calculator.</p>
								<p><em>Built for Limelight Department</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="sq-list-website-thumb">
									<a href="images/websites/src/bowtech.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/bowtech.png' ); ?>" alt="Screen capture of BowtechArchery.com"></a>
								</div>
								<h3>Bowtech Archery</h3>
								<h4><a href="https://bowtecharchery.com/" target="_blank">bowtecharchery.com</a></h4>
							</div>
							<div class="sq-list-content">
								<p>International brand of hunting bows. Custom bow sorting and comparison utility. Store locator with API.</p>
								<p><em>Built for Limelight Department</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="sq-list-website-thumb">
									<a href="images/websites/concealed-nation.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/concealed-nation.png' ); ?>" alt="Screen capture of ConcealedNation.org"></a>
								</div>
								<h3>Concealed Nation</h3>
								<h4><a href="https://concealednation.org/" target="_blank">concealednation.org</a></h4>
							</div>
							<div class="sq-list-content">
								<p>Complete custom rebuild. Built a custom ad placement plugin with desktop/mobile variants.</p>
								<p><em>Built for Limelight Department</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="sq-list-website-thumb">
									<a href="images/websites/st-clairs.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/st-clairs.png' ); ?>" alt="Screen capture of TheStClairs.com"></a>
								</div>
								<h3>The Adrienne St Clair Group</h3>
								<h4><a href="https://www.thestclairs.com/" target="_blank">thestclairs.com</a></h4>
							</div>
							<div class="sq-list-content">
								<p>Property locator plugin (iHomeFinder), Unique day/night theme, Animated front page.</p>
								<p><em>Built for Limelight Department</em></p>
							</div>
						</div>
						<div class="sq-list-item">
							<div class="sq-list-header">
								<div class="sq-list-website-thumb">
									<a href="images/websites/project-mayhem.png" target="_blank" title="View Full Image"><img src="<?php echo return_base64_url( 'images/websites/project-mayhem.png' ); ?>" alt="Screen capture of JoinProjectMayhem.com"></a>
								</div>
								<h3>Fight Club 2: Project Mayhem (Dark Horse Comics)</h3>
								<h4><a href="https://joinprojectmayhem.com/" target="_blank">joinprojectmayhem.com</a></h4>
							</div>
							<div class="sq-list-content">
								<p>Custom map-style interface. Many animations. Contribute &amp;amp; Sightings section managed by custom post types. User submitted content.</p>
								<p><em>Built for Limelight Department</em></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php
$websites = <<<TEXT
24/7 Guide &amp; Outfitter
Abrahao Jiu-Jitsu
Action Rent-All
American Home &amp; Stone
American Horrors
Arma Coating
AutoArt
Cascade Title
CPY Lane
Dyscover.me
Eugene Dining
Eugene Tax Service
Feel Great Live Healthy
Festival of Eugene
Gibson Homes
Gibson Roofing
Harrang Law (HLGR)
HG Schlicker &amp; Associates
Indie Game Con
Intox-Detox
Jessica Bonin
Joe's Truck &amp; Trailer Supply
KEZI/KDRV News
Maya Rose Cosmetics
McKenzie Brewing
Natural Flea Control
NEDCO
New Horizons
N-Touch Band
NW Acre Homes
NW RV Supply
NW Speech
Oregon Music Festival
Overdrive Sales Solutions
Pacific Armory
Pacific Rubber
Philadelphians Tours
PhoenixNW
Pro Contracting
Relationship Styles
Rustic Lighting and Fans
Scout26
Sea-Tac Lighting
SPOT Spay and Neuter
Steelhead Brewery
Stone River Publishing
Tailored Taps
The Growler Underground
Virginia Concealed
Women Cantors' Network
Zack Poelwijk
Homer Insurance
Mary Lou Hales School of Dance
Seivah Life Beyond Memory
Brieant Youth Alliance
Estate Inspection Group
Old Post PT
Ready To Empower
Shirt Prop
See Your Way Clear
Jewish Heart and Soul
NY Center For Recovery
F.P.C. Ossining
Terra Tech
TEXT;

			// make array
			$websites = explode("\n", $websites);
			
			// remove empty
			$websites = array_filter( $websites );
			
			// sort
			natsort($websites);
			
			if ( $websites ) {
			?>
			<div class="extended-websites primary-section">
				<h3 class="section-title">And <?php echo count($websites); ?> Other Websites</h3>
				<div class="content">
					
					<ul class="ext-website-list">
						<?php
						foreach( $websites as $name ) {
							echo '<li>', $name, '</li>';
						}
						?>
					</ul>
				
				</div>
			</div>
			<?php
			}
			?>
		
		</div>
	
	</div>
	
	<div class="footer">
		
		<p>This resume was created by Radley Sustaire and is licensed under <a href="https://www.gnu.org/licenses/gpl-3.0.html">GPLv3</a>.
			<br>The source code is available on Github at <a href="https://github.com/RadGH/Radley-s-Resume" target="_blank">github.com/RadGH/Radley-s-Resume</a>.</p>
	
	</div>

</div>

<?php
// Update gtag.js once a day
$filename = include( 'gtag.php' );
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="<?php echo htmlspecialchars( $filename ); ?>"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}

	gtag('js', new Date());

	gtag('config', 'UA-2575959-16');
</script>

</body>
</html>