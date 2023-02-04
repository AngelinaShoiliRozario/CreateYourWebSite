const section_1_title_change = (tag) => {
    console.log(tag);
    let section_1_title = document.getElementById("section_1_title");
    console.log(section_1_title);
    section_1_title.setAttribute("value", tag.innerHTML);
    console.log(section_1_title);
};
const section_1_desc_change = (tag) => {
    console.log(tag);
    let section_1_desc = document.getElementById("section_1_desc");
    // console.log(section_1_title);
    section_1_desc.setAttribute("value", tag.innerHTML);
    // console.log(section_1_title);
};
