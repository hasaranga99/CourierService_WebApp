<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- Include html2pdf.js library -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script>
  function downloadInvoiceAsPDF() {
    // Get the HTML content of the invoice
    const invoiceElement = document.querySelector(".card");

    // Set options for the PDF generation (optional)
    const options = {
      margin: 10,
      filename: "invoice.pdf",
      image: { type: "jpeg", quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
    };

    // Generate the PDF
    html2pdf().from(invoiceElement).set(options).save();
  }
</script>

<script>
    function printInvoice() {
        window.print();
    }

    function downloadInvoiceAsPDF() {
        // Implement the code to download the invoice as PDF using your preferred PDF library
        // For example, you can use jsPDF, html2pdf, dompdf, etc.
        // Here, I'm using a placeholder function downloadPDF() for demonstration purposes.
        // Replace this with your actual code to generate and download the PDF.
        downloadPDF();
    }

    // Placeholder function for PDF download
    function downloadPDF() {
        alert('PDF download feature not implemented yet!');
    }
</script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script>
    function printInvoice() {
        window.print();
    }

    function downloadInvoiceAsPDF() {
        // Create a new jsPDF instance
        const doc = new jsPDF();

        // Define the content of the PDF
        const content = `
            Customer Bill Details

            Courier Pvt Ltd
            Customer Address: <?= $customer['receivers_address']; ?>
            Senders Address: <?= $customer['senders_address']; ?>
            Customer Contact: <?= $customer['mobile_number']; ?> / Customer Email: <?= $customer['email']; ?>

            Customer Name: <?= $customer['name']; ?>
            Item: <?= $customer['items']; ?>
            Product Description: <?= $customer['description']; ?>
            Price: <?= $customer['amount']; ?>

            Thank you for choosing our services!
        `;

        // Add the content to the PDF
        doc.text(content, 10, 10);

        // Save the PDF with the customer ID as the file name
        doc.save(`customer_invoice_${<?= $customer['id']; ?>}.pdf`);
    }
</script>

<script>
    function downloadInvoiceAsPDF() {
        // ... Your existing PDF generation and download code ...
    }
</script>


</body>
</html>