<?php

@include 'config.php';

// session_start();

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Privacy Policy - Happy Cakes</title>
   <link rel="stylesheet" href="css/style.css">
   <style>
      .privacy-policy {
         max-width: 1200px;
         margin: 0 auto;
         padding: 2rem;
         background-color: var(--white);
         border-radius: 0.5rem;
         box-shadow: var(--box-shadow);
         opacity: 0;
         transform: translateY(30px);
         animation: fadeInUp 0.8s ease-out forwards;
      }
      
      @keyframes fadeInUp {
         to {
            opacity: 1;
            transform: translateY(0);
         }
      }
      
      @keyframes fadeInLeft {
         from {
            opacity: 0;
            transform: translateX(-30px);
         }
         to {
            opacity: 1;
            transform: translateX(0);
         }
      }
      
      @keyframes fadeInRight {
         from {
            opacity: 0;
            transform: translateX(30px);
         }
         to {
            opacity: 1;
            transform: translateX(0);
         }
      }
      
      @keyframes fadeIn {
         from {
            opacity: 0;
         }
         to {
            opacity: 1;
         }
      }
      
      .privacy-policy h2 {
         font-size: 2.8rem;
         color: var(--pink);
         margin-bottom: 1.5rem;
         border-bottom: 0.1rem solid var(--light-bg);
         padding-bottom: 1rem;
         opacity: 0;
         animation: fadeInLeft 0.8s ease-out 0.2s forwards;
      }
      
      .privacy-policy h3 {
         font-size: 2.2rem;
         color: var(--black);
         margin: 2rem 0 1rem 0;
         opacity: 0;
         transform: translateY(20px);
      }
      
      .privacy-policy p {
         font-size: 1.6rem;
         color: var(--light-color);
         line-height: 1.8;
         margin-bottom: 1.5rem;
         opacity: 0;
         transform: translateY(15px);
      }
      
      .privacy-policy ul {
         padding-left: 2rem;
         margin-bottom: 1.5rem;
         opacity: 0;
         transform: translateY(15px);
      }
      
      .privacy-policy ul li {
         font-size: 1.6rem;
         color: var(--light-color);
         line-height: 1.8;
         margin-bottom: 0.8rem;
         opacity: 0;
         transform: translateX(20px);
      }
      
      .privacy-policy .last-updated {
         font-size: 1.4rem;
         color: var(--light-color);
         margin-top: 3rem;
         font-style: italic;
         opacity: 0;
         animation: fadeIn 0.6s ease-out 0.1s forwards;
      }
      
      .privacy-section {
         margin-bottom: 3rem;
         opacity: 0;
         transform: translateY(20px);
      }
      
      /* Animation classes for JavaScript */
      .animate-heading {
         animation: fadeInUp 0.6s ease-out forwards;
      }
      
      .animate-paragraph {
         animation: fadeInUp 0.6s ease-out forwards;
      }
      
      .animate-list {
         animation: fadeInRight 0.6s ease-out forwards;
      }
      
      .animate-list-item {
         animation: fadeInLeft 0.4s ease-out forwards;
      }
      
      .animate-section {
         animation: fadeInUp 0.7s ease-out forwards;
      }
      
      /* Stagger animation delays */
      .privacy-section:nth-child(2) { animation-delay: 0.3s; }
      .privacy-section:nth-child(3) { animation-delay: 0.4s; }
      .privacy-section:nth-child(4) { animation-delay: 0.5s; }
      .privacy-section:nth-child(5) { animation-delay: 0.6s; }
      .privacy-section:nth-child(6) { animation-delay: 0.7s; }
      .privacy-section:nth-child(7) { animation-delay: 0.8s; }
      .privacy-section:nth-child(8) { animation-delay: 0.9s; }
      .privacy-section:nth-child(9) { animation-delay: 1.0s; }
      .privacy-section:nth-child(10) { animation-delay: 1.1s; }
      
      /* Smooth transitions for interactive elements */
      .privacy-policy h3:hover {
         color: var(--pink);
         transition: color 0.3s ease;
      }
      
      /* Reduced motion for accessibility */
      @media (prefers-reduced-motion: reduce) {
         .privacy-policy,
         .privacy-policy h2,
         .privacy-policy h3,
         .privacy-policy p,
         .privacy-policy ul,
         .privacy-policy ul li,
         .privacy-policy .last-updated,
         .privacy-section {
            animation: none;
            opacity: 1;
            transform: none;
         }
      }
   </style>
</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>privacy policy</h3>
</section>

<section class="privacy-policy">
   <div class="last-updated">Last Updated: May 13, 2025</div>
   
   <h2>Our Privacy Policy</h2>
   <p>At Happy Cakes bakery, we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you visit our website or place an order with us. By using our services, you consent to the practices described in this policy.</p>
   
   <div class="privacy-section">
      <h3>1. Information We Collect</h3>
      <p>We collect several types of information from and about users of our website, including:</p>
      <ul>
         <li><strong>Personal Data:</strong> Name, email address, postal address, phone number, payment information, and delivery details when you place an order or create an account.</li>
         <li><strong>Order Information:</strong> Details about the products you purchase, special instructions, and gift messages.</li>
         <li><strong>Technical Data:</strong> IP address, browser type and version, time zone setting, browser plug-in types and versions, operating system, and platform.</li>
         <li><strong>Usage Data:</strong> Information about how you use our website, products, and services.</li>
      </ul>
   </div>
   
   <div class="privacy-section">
      <h3>2. How We Use Your Information</h3>
      <p>We use your personal information for the following purposes:</p>
      <ul>
         <li>Process and fulfill your orders, including payment processing and delivery coordination</li>
         <li>Send order confirmations, updates, and receipt notifications</li>
         <li>Provide customer support and respond to your inquiries</li>
         <li>Improve our website, products, and services</li>
         <li>With your consent, send promotional emails about new products, special offers, or other information we think you may find interesting</li>
         <li>Administer contests, promotions, surveys, or other site features</li>
         <li>Prevent fraudulent transactions and monitor against theft</li>
      </ul>
   </div>
   
   <div class="privacy-section">
      <h3>3. Cookies and Tracking Technologies</h3>
      <p>Our website uses cookies and similar tracking technologies to enhance your browsing experience and collect information about how you use our site. Cookies are small files that a site transfers to your computer's hard drive through your web browser that enables the site to recognize your browser and remember certain information.</p>
      <p>We use the following types of cookies:</p>
      <ul>
         <li><strong>Essential cookies:</strong> Necessary for the website to function properly</li>
         <li><strong>Analytical/performance cookies:</strong> Allow us to recognize and count the number of visitors and see how visitors move around our website</li>
         <li><strong>Functionality cookies:</strong> Used to recognize you when you return to our website</li>
         <li><strong>Targeting cookies:</strong> Record your visit to our website, the pages you have visited, and the links you have followed</li>
      </ul>
      <p>You can control cookies through your browser settings. However, disabling certain cookies may limit your ability to use some features of our website.</p>
   </div>
   
   <div class="privacy-section">
      <h3>4. Third-Party Service Providers</h3>
      <p>We may share your information with third-party service providers who perform services on our behalf, such as:</p>
      <ul>
         <li>Payment processors to securely handle your transaction data</li>
         <li>Delivery services to fulfill your orders</li>
         <li>Email service providers to send communications</li>
         <li>Analytics providers to help us understand how our website is used</li>
      </ul>
      <p>These service providers have access to your personal information only to perform these tasks on our behalf and are contractually obligated not to disclose or use it for any other purpose.</p>
   </div>
   
   <div class="privacy-section">
      <h3>5. Data Security</h3>
      <p>We implement appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. These measures include:</p>
      <ul>
         <li>Encryption of sensitive data during transmission</li>
         <li>Secure servers and networks</li>
         <li>Regular security assessments and updates</li>
         <li>Limited access to personal information by employees on a need-to-know basis</li>
      </ul>
      <p>However, no method of transmission over the Internet or electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.</p>
   </div>
   
   <div class="privacy-section">
      <h3>6. Your Rights</h3>
      <p>Depending on your location, you may have certain rights regarding your personal information, including:</p>
      <ul>
         <li>The right to access the personal information we hold about you</li>
         <li>The right to request correction of inaccurate personal information</li>
         <li>The right to request deletion of your personal information</li>
         <li>The right to object to processing of your personal information</li>
         <li>The right to data portability</li>
         <li>The right to withdraw consent at any time</li>
      </ul>
      <p>To exercise any of these rights, please contact us using the information provided at the end of this policy.</p>
   </div>
   
   <div class="privacy-section">
      <h3>7. Children's Privacy</h3>
      <p>Our website is not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us so that we can delete the information.</p>
   </div>
   
   <div class="privacy-section">
      <h3>8. Changes to This Privacy Policy</h3>
      <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will post the updated Privacy Policy on this page with a new "Last Updated" date. We encourage you to review this Privacy Policy periodically to stay informed about how we are protecting your information.</p>
   </div>
   
   <div class="privacy-section">
      <h3>9. Contact Us</h3>
      <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at:</p>
      <p>
         Happy Cakes Bakery<br>
         123 Sweet Street<br>
         Bakery Town, BT1 2CD<br>
         Email: privacy@happycakes.com<br>
         Phone: (555) 123-4567
      </p>
   </div>
</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced animation with Intersection Observer for better performance
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                
                if (element.classList.contains('privacy-section')) {
                    element.style.animation = 'fadeInUp 0.7s ease-out forwards';
                    
                    // Animate child elements with staggered delays
                    const heading = element.querySelector('h3');
                    const paragraphs = element.querySelectorAll('p');
                    const lists = element.querySelectorAll('ul');
                    
                    if (heading) {
                        setTimeout(() => {
                            heading.style.animation = 'fadeInUp 0.6s ease-out forwards';
                        }, 100);
                    }
                    
                    paragraphs.forEach((p, index) => {
                        setTimeout(() => {
                            p.style.animation = 'fadeInUp 0.6s ease-out forwards';
                        }, 200 + (index * 100));
                    });
                    
                    lists.forEach((ul, index) => {
                        setTimeout(() => {
                            ul.style.animation = 'fadeInRight 0.6s ease-out forwards';
                            
                            const listItems = ul.querySelectorAll('li');
                            listItems.forEach((li, liIndex) => {
                                setTimeout(() => {
                                    li.style.animation = 'fadeInLeft 0.4s ease-out forwards';
                                }, liIndex * 50);
                            });
                        }, 300 + (index * 100));
                    });
                }
                
                observer.unobserve(element);
            }
        });
    }, observerOptions);

    // Observe all privacy sections
    const sections = document.querySelectorAll('.privacy-section');
    sections.forEach(section => {
        observer.observe(section);
    });

    // Add subtle hover effects for interactive elements
    const headings = document.querySelectorAll('.privacy-section h3');
    headings.forEach(heading => {
        heading.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        heading.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });
});
</script>

</body>
</html>