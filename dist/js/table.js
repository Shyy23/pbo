function getTableType() {
    const tableTypes = ['customer', 'barang'];
    for (const type of tableTypes) {
        if (document.getElementById(`table-${type}`) !== null) {
            return type;
        }
    }
    return '';
}

// Convert To Pdf
const typeTable = getTableType();
const pdf_btn = document.getElementById('toPDF');
const table = document.querySelector(`#body_${typeTable}`);
console.log(typeTable);
console.log(table);
const toPDF = function(table){
    const html_code = `
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="../dist/css/hamburgers.css">
    <link rel="stylesheet" href="../dist/css/style.css">
    <link rel="stylesheet" href="../dist/css/table.css">

    <body">${table.innerHTML}</body>
    `;

    const new_window = window.open();
    new_window.document.write(html_code);

    setTimeout(()=>{
        new_window.print();
        new_window.close();
    },1000);
}
pdf_btn.onclick = () => {
    toPDF(table);
}