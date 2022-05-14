import React, { useState } from 'react';

function SidebarLinkGroup({
  children,
  activecondition,
}) {

  const [open, setOpen] = useState(activecondition);

  const handleClick = () => {
    setOpen(!open);
  }

  return (
    <li className={`px-3 py-2 rounded text-white mb-0.5 last:mb-0 ${activecondition && 'bg-red-500'}`}>
      {children(handleClick, open)}
    </li>
  );
}

export default SidebarLinkGroup;